
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
				<li><a href="{{route('admin/index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li><a href="{{route('admin/products')}}"> Sản phẩm</a></li>
				<li class="active">Nhóm sản phẩm</li>
			</ul>


		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">



		<!-- Individual column searching (text inputs) -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Danh sách nhóm sản phẩm</h5>
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
							<th>ID nhóm sản phẩm</th>
							<th>Tên nhóm sản phẩm</th>
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
					<tfoot>
						<tr>
							<td>Name</td>
							<td>Position</td>
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