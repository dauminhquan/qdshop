
<?php

$js = ['assets/js/plugins/tables/footable/footable.min.js','assets/js/plugins/notifications/pnotify.min.js',
'assets/js/plugins/forms/selects/select2.min.js','assets/js/pages/table_responsive.js',
'assets/js/core/app.js','assets/js/build/action_invoice.js'];
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
@section('mobile')
<li><a class="sidebar-mobile-detached-toggle"><i class="icon-grid7"></i></a></li>
@endsection
@section('minmax-invoice')
<li>
	<a class="sidebar-control sidebar-detached-hide hidden-xs">
		<i class="icon-drag-left"></i>
	</a>
</li>
@endsection
@section('content')

<div class="content-wrapper">

	
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Thông tin nhân viên</span></h4>
			</div>

			@include('admin.layouts.menu-action')
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="{{route('admin/index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li><a href="{{route('admin/employees')}}"> Nhân viên</a></li>
				<li class="active">Thông tin nhân viên</li>
			</ul>


		</div>
	</div>
	
	<div class="content">

		
		<div class="sidebar-detached">
			<div class="sidebar sidebar-default sidebar-separate">
				<div class="sidebar-content">

					<div class="content-group">
						<div class="panel-body bg-indigo-400 border-radius-top text-center" style="background-image: url(https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/16684163_661413787362875_6727556996977584083_n.jpg?oh=37cdde42dbb049aee71252976f0ff67d&oe=5A62857C); background-size: contain;">
							<div class="content-group-sm">
								<h6 class="text-semibold no-margin-bottom">

								</h6>
							</div>

							<a href="{{route('admin/customers/profile').'?id='.$data_orders->customer_id}}" class="display-inline-block content-group-sm">
								<img id="img_avatar" src="{{$data_orders->avatar}}" class="img-circle img-responsive" alt="" style="height: 150px;width: auto;">
							</a>

						</div>

						<div class="panel panel-body no-border-top no-border-radius-top">
							<br>
							<div class="form-group mt-5">
								<label class="text-semibold">Người dùng:</label>
								<span class="pull-right-sm">{{$data_orders->first_name.' '.$data_orders->last_name}}</span>
							</div>

							<div class="form-group">
								<label class="text-semibold">Số điện thoại:</label>
								<span class="pull-right-sm">{{$data_orders->business_phone}}</span>
							</div>

							<div class="form-group">
								<label class="text-semibold">Email:</label>
								<span class="pull-right-sm"><a href="#">{{$data_orders->email_address}}</a></span>
							</div>
						</div>
					</div>
				





				</div>
			</div>
		</div>
	
		<div class="container-detached">
			<div class="content-detached">

			
				<div class="tab-content">
					<div class="tab-pane fade in active" id="profile">

						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title">Thông tin đơn hàng: <b> #{{$data_orders->id}}</b></h6>
								<h6 class="panel-title">Tình trạng: <b
									@switch($data_orders->status_id)
									@case(0)
									class="text-success"
									@break

									@case(1)
									class="text-blue"
									@break
									@case(2)
									class="text-indigo"
									@break
									@case(3)
									class="text-brown"
									@break
									@default
									@endswitch
									> {{$data_orders->status_name}}</b></h6>
									<div class="heading-elements">
										<ul class="icons-list">
											<li><a data-action="collapse"></a></li>
											<li><a data-action="reload"></a></li>
											<li><a data-action="close"></a></li>
										</ul>
									</div>
								</div>

								<div class="panel-body">
									<form method="post" id="action-invoice" data-value="{{$data_orders->id}}">
										<div class="row">
											<div class="col-md-12">
												<fieldset>
													<legend class="text-semibold"><i class="icon-truck position-left"></i> Thông tin nhận hàng</legend>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label>Họ tên người nhận hàng :</label><i class="text-semibold"> {{$data_orders->ship_name}}</i>
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label>Email :</label><i class="text-semibold"> {{$data_orders->email_address}}</i>
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label>Số điện thoại liên hệ :</label><i class="text-semibold"> {{$data_orders->ship_business_phone}}</i>
															</div>
														</div>

													</div>

													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label>Tỉnh/Thành :</label><i class="text-semibold"> {{$data_orders->ship_state_province}}</i>
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>Quận/Huyện :</label><i class="text-semibold"> {{$data_orders->ship_wards}}</i>
															</div>
														</div>
														<div class="col-md-5">
															<div class="form-group">
																<label>Địa chỉ :</label><i class="text-semibold"> {{$data_orders->ship_address}}</i>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label>Chọn shipper:</label>
																<select data-placeholder="Chọn shipper" name="shipper_id" class="select" required="required" @if(!empty($data_orders->shipper_id)) disabled ="disabled" @endif >



																	<option></option>
																	@foreach($shippers as $item)
																	<option @if($data_orders->shipper_id == $item->id)  selected @endif value="{{$item->id}}">{{$item->first_name.' '.$item->last_name}}</option>
																	@endforeach


																</select>
															</div>
														</div>

														<div class="col-md-6">
															<div class="form-group">
																<label>Hạn giao hàng:</label>
																<input type="date"  class="form-control"  @if(!empty($data_orders->due_date))  disabled ="disabled " value="{{date('Y-m-d',strtotime($data_orders->due_date))}}" @else min="{{date('Y-m-d', strtotime(' +3 day'))}}" max="{{date('Y-m-d', strtotime(' +30 day'))}}"  @endif name="due_date" required="required">
															</div>
														</div>
													</div>

													<div class="form-group">
														<label>Thông tin thêm về hóa đơn:</label>
														<textarea @if(!empty($data_orders->notes)) disable @endif rows="5" cols="5" name="notes" class="form-control" placeholder="Điền thông tin thêm"></textarea>
													</div>
												</fieldset>
											</div>
										</div>

										<div class="table">
											<fieldset>
												<legend class="text-semibold"><i class="icon-menu2 position-left"></i> Danh sách các mặt hàng đã đặt mua</legend>

												<table class="table table-togglable table-hover">
													<thead>
														<tr>
															<th data-toggle="true">Id sản phẩm</th>
															<th data-hide="phone">Tên sản phẩm</th>
															<th data-hide="phone">Số lượng</th>
															<th data-hide="phone">Thuế</th>
															<th data-hide="phone">Phí ship</th>
															<th data-hide="phone,tablet">Thông tin thêm</th>
															<th class="text-center" style="width: 30px;"><i class="icon-menu-open2"></i></th>
														</tr>
													</thead>
													<tbody>
														@foreach($data_order_details as $item)
														<tr>

															<td>{{$item->product_id}}</td>
															<td><a href="{{route('admin/products/profile').'?id='.$item->product_id}}">{{$item->product_name}}</a></td>
															<td>{{$item->quantity}}</td>
															<td>{{$item->tax}}</td>
															<td>{{$item->price_ship}}</td>
															<td>{{$item->notes}}</td>
															<td class="text-center">
																<ul class="icons-list">
																	<li class="dropdown">
																		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																			<i class="icon-menu9"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-menu-right">
																			<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
																			<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
																			<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
																		</ul>
																	</li>
																</ul>
															</td>



														</tr>
														@endforeach

													</tbody>
												</table>
											</fieldset>
											<hr><div><h5 class="text-right">Tổng tiền: <b>{{$data_orders->tax+$data_orders->shipping+$data_orders->amount_due}}</b><sup>đ</sup></h5></div>
											<hr>
										</div>

										<div style="margin-top: 15px; margin-right: 10px;">
											<div class="text-right">
												@if($data_orders->status_id == 0 || $data_orders->status_id == 1)
												<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_cancel_invoice">Hủy đơn hàng <i class=" icon-cross2 position-left"></i></button>
												@endif

												@if($data_orders->status_id == 0)
												<button type="submit" class="btn btn-primary">Giao hàng <i class="icon-arrow-right14 position-right"></i></button>
												@endif
												@if($data_orders->status_id == 3 || $data_orders->status_id == 2)
												<button type="button" data-toggle="modal" data-target="#modal_delete_invoice" class="btn btn-danger">Xóa đơn hàng <i class="icon-cross2 position-right"></i></button>
												@endif
											</div>
										</div>
									</form>
								</div>

							</div>
						</div>




					</div>
				

				</div>
			</div>
			


			@include('admin.layouts.footer')

		</div>
		

	</div>

	<div id="modal_delete_invoice" class="modal fade" data-backdrop="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h6 class="modal-title">Xóa đơn hàng</h6>
				</div>

				<div class="modal-body">
					<h6 class="text-semibold">Bạn chắc chắn chứ?</h6>
					<p> Sau khi xóa đơn hàng. Mọi dữ liệu về đơn hàng này sẽ bị xóa vĩnh viễn!</p>
				</div>

				<div class="modal-footer">

					<button type="button" id="delete-invoice"  data-dismiss="modal" class="btn btn-danger">Xác nhận xóa</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</div>
	</div>
	<div id="modal_cancel_invoice" class="modal fade" data-backdrop="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h6 class="modal-title">Hủy đơn hàng</h6>
				</div>
				<div class="modal-body">
					<h6 class="text-semibold">Bạn chắc chắn chứ?</h6>
				</div>

				<div class="modal-footer">
					<button type="button" id="cancel-invoice"  data-dismiss="modal" class="btn btn-danger">Xác nhận hủy</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				</div>
			</div>
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
	<script>
		$('.select').select2();
	</script>
	@endsection

