


<?php

$js = ['ckeditor/ckeditor.js','assets/js/plugins/forms/selects/select2.min.js','assets/js/plugins/media/fancybox.min.js','assets/js/plugins/uploaders/fileinput.min.js','assets/js/core/app.js','assets/js/plugins/notifications/pnotify.min.js','assets/js/pages/uploader_bootstrap.js','assets/js/plugins/forms/styling/uniform.min.js','assets/js/pages/form_layouts.js','assets/js/pages/editor_ckeditor.js','assets/js/build/custom.js',
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
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Thêm mới sản phẩm</span></h4>
			</div>

			@include('admin.layouts.menu-action')
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="{{url('admin/index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li><a href="user_profile_tabbed.html">Sản phẩm</a></li>
				<li class="active">Thêm mới sản phẩm</li>
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
								<h6 class="panel-title">Điền thông tin cho sản phẩm</h6>
								
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
												<input name="product_code" type="text" value="" class="form-control" required>
											</div>
											<div class="col-md-6">
												<label>Tên sản phẩm</label>
												<input name="product_name" type="text" value="" class="form-control" required>
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
														@foreach($all_group_name as $item)<option name="{{$item}}">{{$item}}</option> @endforeach
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
															<option value="{{$item->id}}">{{$item->company}}</option>
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
															<option value="{{$item->id}}">{{$item->name_color}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Kích cỡ:</label>
													<select data-placeholder="Chọn kích cỡ" multiple="multiple" class="select-fixed-multiple" name="size_id[]">

														@foreach($sizes as $item)
															<option value="{{$item->id}}">{{$item->name_size}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Cân nặng:</label>
													<input type="number" min="0" value="0" class="form-control" name="weight">
												</div>
											</div>
										</div>

									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label>Giá nhập</label>
												<input name="standard_cost" type="number" min="1000" value="1000" class="form-control" required>
											</div>
											<div class="col-md-4">
												<label>Giá bán</label>
												<input name="list_price" type="number" min="1000" value="1000" class="form-control" required>
											</div>
											<div class="col-md-4">
												<label>Thuế sản phẩm</label>
												<input type="number" min="0" value="0" name="tax" class="form-control" required>
											</div>

										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-md-6">
												<label>Còn hàng </label>
												<select class="form-control" name="discontinued" required>
													<option value="1" selected>Có</option>
													<option value="0">Không</option>
												</select>

											</div>
											<div class="col-md-6">
												<label>Hiển thị sản phẩm </label>
												<select class="form-control" name="show" required>
													<option value="1" selected>Có</option>
													<option value="0">Không</option>
												</select>

											</div>

										</div>
									</div>



									<h5>Nội dung hiển thị phần content trên website</h5>
									<div class="content-group">
										<textarea name="description" id="editor-full" rows="4" cols="4" required>

										</textarea>
									</div>
									<div class="text-right">
										<button type="submit" class="btn btn-primary">Thêm mới sản phẩm <i class="icon-arrow-right14 position-right"></i></button>
									</div>
									{!! csrf_field() !!}
								</form>

							</div>
							<!-- /profile info -->

						</div>	





					</div>


				</div>
				<!-- /tab content -->
			</div>
			
			<!-- /detached content -->


			@include('admin.layouts.footer')

		</div>
		<!-- /content area -->

	</div>
	<!-- /main content -->
</div>

<script>
	<?php $all_group = [];
		foreach ($groups as $item)
		    {
		        $cr = (array) $item;
		        unset($cr['group_id']);
				array_push($all_group,(json_encode($cr,JSON_UNESCAPED_UNICODE)));

			}
	?>
    $(document).ready(function () {
        $('#group-product').change(function () {
            var value = $(this).val();
            var data = '<?php print_r(json_encode($all_group,JSON_UNESCAPED_UNICODE)) ?>';
            data = data.replace(/"{/g,'{')
            data = data.replace(/}"/g,'}')
            data = data.replace(/\\/g,'')
            data = $.parseJSON(data);
            html = '';
            for(var i = 0;i <data.length;i++)
			{
			    if(value == data[i]['name_group'])
				{
				    html+= '<option value="'+data[i]['id']+'">'+data[i]['name_type']+'</option>'
				}
			}
			$('select[name="type_id"]').html(html)
        })
        $('select.select-fixed-multiple').select2()
    })
</script>
@if(isset($check))
	<script>
        $(document).ready(function () {
			@if($check === true)
            new PNotify({
                title: 'Thành công',
                text: 'Thêm mới thành công',
                addclass: 'bg-success'
            });
			@elseif(isset($check['ms']))
            new PNotify({
                title: 'Thất bại',
                text: 'Mã sản phẩm đã tồn tại',
                addclass: 'bg-danger'
            });
			@endif
        })
	</script>

@endif
	@endsection
