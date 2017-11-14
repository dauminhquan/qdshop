
<?php
$js = ['assets/js/plugins/tables/datatables/datatables.min.js','assets/js/plugins/forms/selects/select2.min.js','assets/js/core/app.js','assets/js/pages/datatables_api.js','assets/js/plugins/notifications/pnotify.min.js','assets/js/build/custom.js'];
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
<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Sản phẩm</span></h4>
			</div>

			@include('admin.layouts.menu-action')
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>

				<li class="active">Sản phẩm</li>
			</ul>


		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">



		<!-- Individual column searching (text inputs) -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Danh sách sản phẩm</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><button class="btn btn-primary"><i class="icon-database-add"></i> Thêm mới</button></li>
					</ul>
				</div>
			</div>
			<div class="panel-body">
				<table class="table datatable-column-search-inputs datatable-button-print-basic">
					<thead>
						<tr>
							<th>Sản phẩm</th>
							<th>Nhóm</th>
							<th>Loại sản phẩm</th>
							<th>Tình trạng</th>
							<th>Hiển thị</th>
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $item)
						<tr>
							<td>
								<a href="{{route('admin/products/profile').'?id='.$item->id}}">{{$item->product_name}}</a>
							</td>
							<td><a href="#">{{$item->name_group}}</a> </td>
							<td><a href="#">{{$item->name_type}}</a></td>
							<td>@if($item->discontinued == 1) Hết hàng @else Còn hàng @endif</td>
							<td>@if($item->show == 0)<span class="label label-info"> Hiển thị</span> @else<span class="label label-danger">Không được hiển thị</span>@endif</td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-pencil5"></i> Sửa sản phẩm</a></li>
											@if($item->discontinued == 1)  <li><a href="{{route('admin/products').'?continued='.$item->id}}"><i class=" icon-stack-plus"></i> Còn hàng</a></li> @else  <li><a href="{{route('admin/products').'?discontinued='.$item->id}}"><i class="icon-stack-empty"></i>Hết hàng</a></li> @endif
											@if($item->show == 0) <li><a href="{{route('admin/products').'?hide='.$item->id}}"><i class="icon-diff-removed"></i> Ẩn sản phẩm</a></li> @else<li><a href="{{route('admin/products').'?show='.$item->id}}"><i class="icon-file-eye"></i> Hiện sản phẩm</a></li>@endif

											<li><a href="{{route('admin/products').'?delete='.$item->id}}"><i class="glyphicon glyphicon-remove"></i> Xóa sản phẩm</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td>Name</td>
							<td>Position</td>
							<td>Age</td>
							<td>Start date</td>
							<td>Salary</td>
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
		<!-- /individual column searching (text inputs) -->


		<!-- Vertical form modal -->

		<!-- /vertical form modal -->

		@include('admin.layouts.footer')

	</div>
	<!-- /content area -->

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
<!-- /main content -->
@endsection