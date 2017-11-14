jQuery(document).ready(function($) {
	$('form#action-invoice').submit(function(event) {
		event.preventDefault()
		var form = new FormData(this)
        form.append('orders_id',parseInt(this.dataset.value))
		var check = action_invoice(form,'/api/invoices/access-invoice');
        if(check.sc == true)
        {
           new PNotify({
            title: 'Thành công',
            text: 'Đơn hàng đang được giao',
            addclass: 'bg-success'
        });
           setTimeout(function(){

            location.reload();
        },2000);
       }

   });
    $('#cancel-invoice').click(function(){

        var form = new FormData()
        form.append('orders_id',parseInt($('form#action-invoice').attr('data-value')))
        var check = action_invoice(form,'/api/invoices/cancel-invoice')
        if(check.sc == true)
        {
           new PNotify({
            title: 'Thành công',
            text: 'Đơn hàng đã được hủy thành công',
            addclass: 'bg-success'
        });
           setTimeout(function(){

            location.reload();
        },2000);
       }
    })
    $('#delete-invoice').click(function(){

        var form = new FormData()
        form.append('orders_id',parseInt($('form#action-invoice').attr('data-value')))
        var check = action_invoice(form,'/api/invoices/delete-invoice')
        if(check.sc == true)
        {
           new PNotify({
            title: 'Thành công',
            text: 'Đơn hàng đã được xóa thành công',
            addclass: 'bg-success'
        });
           setTimeout(function(){
            location.reload();
        },2000);
       }
    })

});

function action_invoice(form,url){
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