
<?php
$js = ['assets/js/plugins/tables/datatables/datatables.min.js','assets/js/plugins/forms/selects/select2.min.js','assets/js/core/app.js','assets/js/pages/datatables_api.js','assets/js/plugins/notifications/pnotify.min.js','assets/js/build/action_product.js'];
$html_js = '';
$count = count($js);
for ($i=0; $i < $count ; $i++)  {
	$html_js = $html_js.'<script type="text/javascript" src="'.asset($js[$i]).'"></script>'	;
}
?>

@extends('admin.layouts.admin')
@section('title','BigShop-Products')
@push('scripts')
<?php 
echo $html_js;
?>
@endpush
@section('content')

<div class="content-wrapper">

	
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Sản phẩm</span></h4>
			</div>

			@include('admin.layouts.menu-action')
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="{{route('admin/index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li><a href="{{route('admin/products')}}"> Sản phẩm</a></li>
				<li class="active">Loại sản phẩm</li>
			</ul>


		</div>
	</div>

	<div class="content">



		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Danh sách loại sản phẩm</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><button class="btn btn-primary" data-toggle="modal" data-target="#add-type"><i class="icon-database-add"></i> Thêm mới</button></li>
					</ul>
				</div>
			</div>
			<div class="panel-body">
				<table class="table">
					<thead >
						<tr class="bg-teal-400">
							<th>ID loại</th>
							<th>Tên loại</th>
							<th>Thuộc nhóm</th>
							<th>Số lượng sản phẩm</th>
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					<tbody>
						
						@foreach($data_types as $item)
						<tr>
							<td><span class="text-info">{{$item->id}}</span> </td>
							<td><a href="#"><span class="text-info">{{$item->name_type}}</a></td>
								<td>{{$item->name_group}}</td>
								<?php $len = 0 ?>
								<td>@foreach($data_count as $value) @if($value->id == $item->id)<?php $len = $value->count ?> {{$value->count}} @endif @endforeach</td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#" data-toggle="modal" data-target="#edit-type" class="click-edit-type"><i class="icon-pencil5"></i> Sửa loại</a></li>
												@if($len == 0)
												<li><a href="#" id="remove-types" data-toggle="modal" data-target="#delete-type"> <i class="glyphicon glyphicon-remove" ></i> Xóa</a></li>
												@endif
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							@endforeach
							

						</tbody>

					</table>
				</div>
			</div>


			@include('admin.layouts.footer')

		</div>

	</div>
	@if(isset($check))

	<script>
		$(document).ready(function () {

			@if($check == true)
			new PNotify({
				title: 'Thành công',
				text: 'Cập nhật thành công',
				addclass: 'bg-success'
			});

			@endif
		})
	</script>
	@endif

	<div id="edit-type" class="modal fade" data-backdrop="false">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-info-300">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title" id="title-modal-change-types">Chỉnh sửa loại sản phẩm</h5>
				</div>

				<form id="form-edit-type" class="form-horizontal">
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label col-sm-2 text-right"><b>Tên loại: </b></label>
							<div class="col-sm-10">
								<input type="number" name="id" style="display: none;" />
								<input type="text" name="name_type" placeholder="Tên loại sản phẩm..." class="form-control" required="true">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 text-right"><b>Nhóm sản phẩm: </b></label>
							<div class="col-sm-10">
								<select class="select-groups form-control" name="group_id" required="true">
									
								</select>
							</div>
						</div>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-info">Lưu thay đổi</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="add-type" class="modal fade" data-backdrop="false">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-info-300">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title" id="title-modal-change-types">Thêm mới loại sản phẩm</h5>
				</div>

				<form id="form-add-type" method="post" class="form-horizontal">
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label col-sm-2 text-right"><b>Tên loại: </b></label>
							<div class="col-sm-10">

								<input type="text" name="name_type" placeholder="Tên loại sản phẩm..." class="form-control" required="true">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2 text-right"><b>Nhóm sản phẩm: </b></label>
							<div class="col-sm-10">
								<select class="select-groups form-control" name="group_id" required="true">
									
								</select>
							</div>
						</div>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-info">Thêm mới</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="delete-type" class="modal fade" data-backdrop="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="form-delete-type">
					<div class="modal-header bg-danger-300">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title" id="title-modal-change-types">Xóa loại sản phẩm</h5>
					</div>
					<div class="modal-body border-danger">
						<input type="number" name="id" style="display: none" required="true">
						<p>Lưu ý. Sau khi xóa không thể phục hồi!</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger">Xóa</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	@endsection