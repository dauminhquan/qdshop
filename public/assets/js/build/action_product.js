jQuery(document).ready(function($) {
	$('.select-groups').select2()

	$('#remove-types').click(function(event) {
		
		var id = parseInt($(this).parents('td:eq(0)').prevAll('td:eq(3)').children('span:eq(0)').html());
	
		$('#delete-type input[name="id"]').val(id)
		
	});
$('#form-delete-type').submit(function(event) {
	var form = new FormData(this)
	var check = request_action_product(form,'/api/products/delete-type')
		if(check.sc == true)
        {
           new PNotify({
            title: 'Thành công',
            text: 'Xóa thành công!',
            addclass: 'bg-success'
        });
           setTimeout(function(){

            location.reload();
        },1500);
       }
		event.preventDefault()
});
	$('.click-edit-type').click(function(event) {
		var all_groups = get_all_groups();
		var type_name = $(this).parents('td:eq(0)').prevAll('td:eq(2)').children('a:eq(0)').children('span:eq(0)').html();
		var name_group = $(this).parents('td:eq(0)').prevAll('td:eq(1)').html();
		var id = parseInt($(this).parents('td:eq(0)').prevAll('td:eq(3)').children('span:eq(0)').html());

		var html_group = ''
		for (var i = all_groups.length - 1; i >= 0; i--) {
			if(name_group == all_groups[i].name_group)
			{
				html_group+='<option selected value="'+all_groups[i].id+'">'+all_groups[i].name_group+'</option>'
			}
			else
			{
				html_group+='<option value="'+all_groups[i].id+'">'+all_groups[i].name_group+'</option>'
			}
			
		}
		$('#edit-type input[name="name_type"]').val(type_name)
		$('#edit-type select[name="group_id"]').html(html_group)
		
		$('#edit-type input[name="id"]').val(id)
	});

	$('form#form-add-type').submit(function(event) {
		var form = new FormData(this)

		var check = request_action_product(form,'/api/products/add-type')
		if(check.sc == true)
        {
           new PNotify({
            title: 'Thành công',
            text: 'Thêm mới loại sản phẩm thành công!',
            addclass: 'bg-success'
        });
           setTimeout(function(){

            location.reload();
        },1500);
       }
		event.preventDefault()
	});
	$('form#form-edit-type').submit(function(event) {

		var form = new FormData(this)
		var check = request_action_product(form,'/api/products/update-type')
		if(check.sc == true)
        {
           new PNotify({
            title: 'Thành công',
            text: 'Update thành công!',
            addclass: 'bg-success'
        });
           setTimeout(function(){

            location.reload();
        },1500);
       }
		event.preventDefault()
	});
});

function request_action_product(form,url){
    var data = false
    $.ajax({
        url: window.location.origin+url, // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        data: form,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        success: function(rep){
            if(rep['sc'] == false)
            {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Có lỗi xảy ra. Vui lòng thử lại',
                    addclass: 'bg-danger'
                });
                console.log(rep);
            }
            else {
                data = rep
                console.log(data)

            }
        },
        error : function (err) {
            new PNotify({
                title: 'Thất bại',
                text: 'Không thể kết nối đến server',
                addclass: 'bg-danger'
            });
        }
    });
    return data
}

function get_all_groups()
{
	var data = []
    $.ajax({
        url: window.location.origin+'/api/products/get-all-groups', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        success: function(rep){
            
                data = rep
            
        },
        error : function (err) {
            new PNotify({
                title: 'Thất bại',
                text: 'Không thể kết nối đến server',
                addclass: 'bg-danger'
            });
        }
    });
    return data
}