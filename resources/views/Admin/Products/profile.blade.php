


<?php

$js = ['ckeditor/ckeditor.js','assets/js/plugins/forms/selects/select2.min.js','assets/js/plugins/media/fancybox.min.js','assets/js/plugins/uploaders/fileinput.min.js','assets/js/core/app.js','assets/js/plugins/forms/styling/uniform.min.js','assets/js/plugins/notifications/pnotify.min.js','assets/js/pages/form_layouts.js','assets/js/pages/editor_ckeditor.js','assets/js/build/custom.js',
    'assets/js/build/file-upload.js'];
$html_js = '';
$count = count($js);
for ($i=0; $i < $count ; $i++)  {
	$html_js = $html_js.'<script type="text/javascript" src="'.asset($js[$i]).'"></script>'	;
}
?>

@extends('admin.layouts.admin')
@section('title','BigShop-Customers')
@push('scripts')
@section('class-body','sidebar-xs has-detached-left')
<?php 
echo $html_js;
?>
@endpush
@section('content')
<!-- Main content -->	
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Thông tin sản phẩm</span></h4>
			</div>

			@include('admin.layouts.menu-action')
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="{{url('admin/index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li><a href="user_profile_tabbed.html">Sản phẩm</a></li>
				<li class="active">Thông tin sản phẩm</li>
			</ul>


		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">

		

		<div class="container-detached">
			<!-- Detached content -->
			
			<div class="content">

				<!-- Tab content -->
				<div class="tab-content">
					<div class="tab-pane fade in active">

						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title">Danh sách ảnh của sản phẩm</h6>
								<div class="heading-elements">
									<ul class="icons-list">
										<li><a data-action="collapse"></a></li>
										<li><a data-action="reload"></a></li>
										<li><a data-action="close"></a></li>
									</ul>
								</div>
							</div>

							<div class="panel-body">
								<!-- Image grid -->


								<div class="row">
									@if(count($all_images) > 0)
										@foreach($all_images as $item)
											<div class="col-lg-3 col-sm-6">
												<div class="thumbnail">
													<div class="thumb">
														<img src="{{Storage::url($item->link)}}" alt="">
														<div class="caption-overflow">
													<span>
														<a href="#" data-value="{{$item->id}}" data-link="{{$item->link}}" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5 remove-image-product"><i class="glyphicon glyphicon-remove"></i></a>
														<a href="#" data-value="{{route('home/index').Storage::url($item->link)}}" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5 show-link-image-product"><i class="icon-link2"></i></a>
													</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
									@endif


								</div>
								<div class="panel-body">

									<form method="post" enctype="multipart/form-data" id="products">
										<div class="form-group">
											<div class="row">
												<label class="col-lg-2 control-label text-semibold">Tải ảnh cho sản phẩm:</label>
												<div class="col-lg-10">
													<input type="file" name="image[]" accept="image/*" class="file-input-image-product" multiple="multiple">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>Mã sản phẩm</label>
													<input name="product_code" data-value="{{$data->id}}" type="text" value="{{$data->product_code}}" class="form-control" required>
												</div>
												<div class="col-md-6">
													<label>Tên sản phẩm</label>
													<input name="product_name" type="text" value="{{$data->product_name}}" class="form-control" required>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Chọn nhóm sản phẩm:</label>
														<select data-placeholder="Chọn loại sản phẩm" class="select" id="group-product" required>
															<option></option>
                                                            <?php $all_group_name = [];

                                                            foreach ($groups as $item)
                                                            {

                                                                array_push($all_group_name,$item->name_group);
                                                            }
                                                            $all_group_name = array_unique($all_group_name);
                                                            ?>
															@foreach($all_group_name as $item)<option name="{{$item}}" @if($item == $data->name_group) selected @endif>{{$item}}</option> @endforeach
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Chọn loại sản phẩm:</label>
														<select data-placeholder="Chọn nhóm sản phẩm" class="select" name="type_id" required>

														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Chọn nhà sản xuất:</label>
														<select data-placeholder="Tìm tên nhà sản xuất" class="select" name="supplier_id" required>
															<option></option>
															@foreach($suppliers as $item)
																<option value="{{$item->id}}" @if($data->supplier_id == $item->id) selected @endif>{{$item->company}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>

										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Màu sản phẩm:</label>
														<select data-placeholder="Chọn loại sản phẩm" multiple="multiple" class="select-fixed-multiple" name="color_id[]">

															@foreach($colors as $item)
																<option value="{{$item->id}}" @foreach($all_colors as $vl) @if($item->name_color == $vl->name_color) selected @endif @endforeach>{{$item->name_color}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Kích cỡ:</label>
														<select data-placeholder="Chọn kích cỡ" multiple="multiple" class="select-fixed-multiple" name="size_id[]">

															@foreach($sizes as $item)
																<option value="{{$item->id}}" @foreach($all_sizes as $vl) @if($item->name_size == $vl->name_size) selected @endif @endforeach>{{$item->name_size}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Cân nặng:</label>
														<input type="number" min="0" value="{{$data->weight}}" class="form-control" name="weight">
													</div>
												</div>
											</div>

										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-3">
													<label>Giá nhập</label>
													<input name="standard_cost" type="number" min="1000" value="{{$data->standard_cost}}" class="form-control" required>
												</div>
												<div class="col-md-3">
													<label>Giá bán</label>
													<input name="list_price" type="number" min="1000" value="{{$data->list_price}}" class="form-control" required>
												</div>
												<div class="col-md-3">
													<label>Thuế sản phẩm</label>
													<input type="number" min="0" value="{{$data->tax}}" name="tax" class="form-control" required>
												</div>
												<div class="col-md-3">
													<label>Phí ship</label>
													<input type="number" min="0" value="{{$data->price_ship}}" name="price_ship" class="form-control" required>
												</div>

											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>Còn hàng </label>
													<select class="form-control" name="discontinued" required>
														<option value="1" @if($data->discontinued == 1) selected @endif>Có</option>
														<option value="0" @if($data->discontinued == 0) selected @endif>Không</option>
													</select>

												</div>
												<div class="col-md-6">
													<label>Hiển thị sản phẩm </label>
													<select class="form-control" name="show" required>
														<option value="1" @if($data->show == 1) selected @endif>Có</option>
														<option value="0" @if($data->show == 0) selected @endif>Không</option>
													</select>

												</div>

											</div>
										</div>



										<h5>Nội dung hiển thị phần content trên website</h5>
										<div class="content-group">
										<textarea name="description" id="editor-full" rows="4" cols="4" required>
{{$data->description}}
										</textarea>
										</div>
										<div class="text-right">
											<button type="submit" name="id" value="{{$data->id}}" class="btn btn-primary">Lưu chỉnh sửa <i class="icon-arrow-right14 position-right"></i></button>
										</div>
										{!! csrf_field() !!}
									</form>

								</div>

							</div>
							<!-- /profile info -->

						</div>	




					</div>


				</div>
				<!-- /tab content -->
			</div>
			
			<!-- /detached content -->




		</div>
		<!-- /content area -->

	</div>
	<div id="show-link-image-product" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Link ảnh sản phẩm</h5>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-sm-12">
							<input type="text" value="123456789" placeholder="Ring street 12" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('admin.layouts.footer')
</div>
<?php $all_group = [];
foreach ($groups as $item)
{
    $cr = (array) $item;
    unset($cr['group_id']);
    array_push($all_group,(json_encode($cr,JSON_UNESCAPED_UNICODE)));

}
?>
@if(isset($check))
	<script>
        $(document).ready(function () {
			@if($check === true)
            new PNotify({
                title: 'Thành công',
                text: 'Update thành công',
                addclass: 'bg-success'
            });
			@elseif(isset($check['ms']))
            new PNotify({
                title: 'Thất bại',
                text: 'Update thất bại. Vui lòng thử lại',
                addclass: 'bg-danger'
            });
			@endif
        })
	</script>

@endif
<script>
    $(document).ready(function () {
        // Fixed width. Multiple selects
        $('.select-fixed-multiple').select2({
            minimumResultsForSearch: Infinity,

        });
    })
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#group-product').change(function () {
            var value = $(this).val();
            var data = '<?php print_r(json_encode($all_group,JSON_UNESCAPED_UNICODE)) ?>';
            data = data.replace(/"{/g,'{')
            data = data.replace(/}"/g,'}')
            data = data.replace(/\\/g,'')
            data = $.parseJSON(data);
            var check = '{{$data->name_type}}'
            html = '';
            for(var i = 0;i <data.length;i++)
            {
                if(value == data[i]['name_group'])
                {
                    if(check == data[i]['name_type'])
                    {
                        html+= '<option value="'+data[i]['id']+'" selected>'+data[i]['name_type']+'</option>'
                    }else {
                        html+= '<option value="'+data[i]['id']+'">'+data[i]['name_type']+'</option>'
                    }

                }
            }
            $('select[name="type_id"]').html(html)
        })
        $('#group-product').change()
	});
</script>
	@endsection
