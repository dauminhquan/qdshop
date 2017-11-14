
<?php
	$js = ['assets/js/plugins/tables/datatables/datatables.min.js','assets/js/plugins/forms/selects/select2.min.js','assets/js/core/app.js','assets/js/plugins/notifications/pnotify.min.js','assets/js/pages/datatables_api.js','assets/js/build/custom.js'];
	$html_js = '';
	$count = count($js);
	for ($i=0; $i < $count ; $i++)  {
	$html_js = $html_js.'<script type="text/javascript" src="'.asset($js[$i]).'"></script>'	;
}
 ?>

@extends('admin.layouts.admin')
@section('title','BigShop-Employees')
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
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Nhân viên</span> </h4>
			</div>

			@include('admin.layouts.menu-action')
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
				
				<li class="active">Nhân viên</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">



		<!-- Individual column searching (text inputs) -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Danh sách nhân viên</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						<li><a data-action="close"></a></li>
					</ul>
				</div>
			</div>

			<table class="table datatable-column-search-inputs">
				<thead>
					<tr>
						<th>Avatar/ID</th>
						<th>Tên người dùng</th>
						<th>Địa chỉ</th>
						<th>Số điện thoại</th>
						<th>Chức vụ</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $item)
						<tr>
							<td><p style="display: none">{{$item->id}}</p><a href="{{route('admin/employees/profile').'?id='.$item->id}}"><img src="{{$item->avatar}}" style="width: 13em;height: 8em" title="ID = {{$item->id}}"></a></td>
							<td><a href="{{route('admin/employees/profile').'?id='.$item->id}}">{{$item->first_name.' '.$item->last_name}}</a></td>
							<td>{{$item->address}}</td>
							<td>{{$item->business_phone}}</td>
							<td>@if($item->block == 0) {{$item->job_title}} @else <span class="icon-user-block"></span> @endif</td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="{{route('admin/employees/profile').'?id='.$item->id}}"><i class="icon-user"></i> Thông tin nhân viên</a></li>
											<li><a href="@if($item->block == 0){{route('admin/employees').'?block='.$item->id}}"> <i class="icon-user-block"></i>  Khóa quyền truy cập @else {{route('admin/employees').'?unblock='.$item->id}}"><i class="icon-user-check"></i> Cấp lại quyền @endif</a></li>

										</ul>
									</li>
								</ul>
							</td>
						</tr>

					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tfoot>
			</table>
		</div>
		<!-- /individual column searching (text inputs) -->


		<!-- Vertical form modal -->

		<!-- /vertical form modal -->

		@include('admin.layouts.footer')

	</div>
	<!-- /content area -->
	<script>
		$(document).ready(function () {
			$('.datatable-column-search-inputs td image').tooltip();
			@if(isset($success))
			@if($success == true)
            new PNotify({
                title: 'Thành công',
                text: 'Thao tác thành công',
                addclass: 'bg-success'
            })
			@else
            new PNotify({
                title: 'Thất bại',
                text: 'Có lỗi trong quá thực hiện. Vui lòng thực hiện lại sau',
                addclass: 'bg-danger'
            })

			@endif
			@endif
        })
	</script>
</div>
			<!-- /main content -->
@endsection