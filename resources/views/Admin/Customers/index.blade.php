
<?php
$theme_js_files = ['assets/js/plugins/tables/datatables/datatables.min.js','assets/js/plugins/forms/selects/select2.min.js','assets/js/core/app.js','assets/js/pages/datatables_api.js',
'assets/js/plugins/forms/selects/bootstrap_multiselect.js','assets/js/plugins/notifications/pnotify.min.js',
'assets/js/build/custom.js'
];
$html_theme_js_files = '';

$count = count($theme_js_files);
for ($i=0; $i < $count ; $i++)  {
	$html_theme_js_files = $html_theme_js_files.'<script type="text/javascript" src="'.asset($theme_js_files[$i]).'"></script>'	;
}

?>
@extends('admin.layouts.admin')
@section('title','BigShop-Customers')
@section('content')
@push('scripts')
<?php
echo $html_theme_js_files;
?>
@endpush


<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Danh sách khách hàng</span> </h4>
			</div>

			@include('admin.layouts.menu-action')
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
				<li class="active">Danh sách khách hàng</li>
			</ul>

			<ul class="breadcrumb-elements">
				<li><a href="#"><i class="icon-comment-discussion position-left"></i> Tin nhắn</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-gear position-left"></i>
						Cài đặt
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-lock"></i> Sản phẩm</a></li>
						<li><a href="#"><i class="icon-statistics"></i> Đơn hàng</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">



		<!-- Individual column searching (text inputs) -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Bảng khách hàng</h5>
				
			</div>


			<table class="table datatable-column-search-inputs  table-striped text-nowrap">
				<thead>
					<tr>
						<th>Khách hàng</th>
						<th>Địa chỉ</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Tình trạng</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $item)
						<tr>
							<td>
								<div class="media">
									<a href="{{route('admin/customers/profile').'?id='.$item->id}}" class="media-left">
										<img src="{{$item->avatar}}" style="height: 50px;width: 50px" class="img-circle img-md" alt="">
									</a>

									<div class="media-body media-middle">
										<a href="{{route('admin/customers/profile').'?id='.$item->id}}" class="text-semibold">{{$item->first_name.' '.$item->last_name}}</a>
									</div>
								</div>


							<td>{{$item->address}}</td>
							<td><span class="label text-info">{{$item->email_address}}</span></td>
							<td>{{$item->business_phone}}</td>
							<td class="text-center">

								@if($item->block == 1)
									<i class="icon-user-block"></i>
									Khóa
								@else
									<i class="icon-user"></i>
									Bình thường
								@endif
							</td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="{{route('admin/customers/profile').'?id='.$item->id}}"><i class="icon-user"></i> Thông tin khách hàng</a></li>
											@if($item->block == 0)
												<li><a href="{{route('admin/customers').'?block='.$item->id}}"><i class="icon-user-block"></i> Khóa tài khoản</a></li>
											@else
												<li><a href="{{route('admin/customers').'?unblock='.$item->id}}"><i class="icon-user-check"></i> Mở khóa tài khoản</a></li>
											@endif
											<li><a href="{{route('admin/customers').'?delete='.$item->id}}"><i class="icon-user-cancel"></i> Xóa tài khoản</a></li>
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
		<!-- /individual column searching (text inputs) -->


		<!-- Vertical form modal -->

		<!-- /vertical form modal -->

		@include('admin.layouts.footer')

	</div>
	<!-- /content area -->

</div>
<!-- /main content -->
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

@endsection
