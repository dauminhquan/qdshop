
@extends('admin.layouts.admin')
<?php
$js = ['assets/js/plugins/forms/styling/uniform.min.js','assets/js/core/app.js','assets/js/plugins/ui/moment/moment.min.js','assets/js/pages/invoice_grid.js','assets/js/plugins/pickers/daterangepicker.js','assets/js/plugins/pickers/pickadate/picker.js','assets/js/plugins/pickers/pickadate/picker.time.js','assets/js/plugins/pickers/pickadate/picker.date.js'];
$html_js = '';
$count = count($js);
for ($i=0; $i <$count ; $i++) {
	$html_js = $html_js.'<script type="text/javascript" src="'.asset($js[$i]).'"></script>';
}
?>
@section('title','BigShop-Invoice')
@section('content')
@section('class-body','sidebar-xs  has-detached-right  pace-done')
@push('scripts')
<?php
echo $html_js;
?>
@endpush

@section('minmax-invoice')
<li>
	<a class="sidebar-control sidebar-detached-hide hidden-xs">
		<i class="icon-drag-right"></i>
	</a>
</li>
@endsection
<!-- Main content -->
<div class="content-wrapper">
	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Đơn hàng</span></h4>
			</div>
			@include('admin.layouts.menu-action')
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
				<li class="active"> Đơn hàng</li>
			</ul>

		</div>
	</div>



	<!-- Content area -->
	<div class="content">

		<!-- Detached content -->
		<div class="container-detached">
			<div class="content-detached">

				<!-- Invoice grid options -->
				<div class="navbar navbar-default navbar-xs navbar-component">
					<ul class="nav navbar-nav no-border visible-xs-block">
						<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
					</ul>
					<?php
					$hom_nay = date('Y-m-d');
					$hom_qua  = mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));
					$hom_qua = date('Y-m-d', $hom_qua);
					$tuan_nay = date("Y-m-d", strtotime('monday this week'));
					$thang_nay =  date('Y-m-1');
					$nam_nay = date('Y-1-1');
					$hom_nay = route('admin/invoices').'?date='.$hom_nay.'&sort-date=1&page=1';
					$hom_qua = route('admin/invoices').'?date='.$hom_qua.'&sort-date=1&page=1';
					$tuan_nay = route('admin/invoices').'?date='.$tuan_nay.'&sort-date=1&page=1';
					$thang_nay = route('admin/invoices').'?date='.$thang_nay.'&sort-date=1&page=1';
					$nam_nay = route('admin/invoices').'?date='.$nam_nay.'&sort-date=1&page=1';
					?>
					<div class="navbar-collapse collapse" id="navbar-filter">
						<p class="navbar-text">Tìm kiếm:</p>
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-sort-time-asc position-left"></i> Theo ngày <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="{{route('admin/invoices')}}">Tất cả</a></li>
									<li class="divider"></li>
									<li><a href="{{$hom_nay}}">Hôm nay</a></li>
									<li><a href="{{$hom_qua}}">Hôm qua</a></li>
									<li><a href="{{$tuan_nay}}">Tuần này</a></li>
									<li><a href="{{$thang_nay}}">Tháng này</a></li>
									<li><a href="{{$nam_nay}}">Năm này</a></li>
									<li style="margin-bottom: -10px;"><input type="text" class="form-control daterange-basic" style="border: none"> </li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-sort-amount-desc position-left"></i>Tình trạng<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="{{route('admin/invoices').'?sort-status=1&status=new'}}">Mới</a></li>
									<li><a href="{{route('admin/invoices').'?sort-status=1&status=shipping'}}">Đang giao hàng</a></li>
									<li><a href="{{route('admin/invoices').'?sort-status=1&status=shipped'}}">Đã giao</a></li>
									<li><a href="{{route('admin/invoices').'?sort-status=1&status=canceled'}}">Đã hủy</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-sort-numeric-asc position-left"></i>Theo giá <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="{{route('admin/invoices').'?type=9-1&sort-price=1'}}">Từ cao xuống thấp</a></li>
									<li><a href="{{route('admin/invoices').'?type=1-9&sort-price=1'}}">Từ thấp lên cao</a></li>
									<li><form>
										<div>

											<input type="number" min="0" placeholder="Từ ..." step="1000" class="form-control" name="from" style="border: none">
										</div>
										<div>

											<input type="number" min="0" step="1000" placeholder="Đến ..." class="form-control daterange-weeknumbers" name="to" style="border: none">
										</div>
										<div style="margin-bottom: -10px;">
											<button type="submit" name="sort-price" value="1" class="form-control btn btn-info" style="border: none">Tìm kiếm</button>
										</div>
									</form>
								</li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="glyphicon glyphicon-search"></i>Theo danh mục<span class="caret"></span>
							</a>

							<ul class="dropdown-menu">
								<form>
									<li>
										<div >
											<input type="text" style="border: none" class="form-control" placeholder="Nhập tên người dùng" name="name">
										</div>
									</li>
									<li style="margin-bottom: -10px;">
										<button type="submit" style="border-radius: 0" class="form-control btn btn-info" value="1" name="sort-name">Tìm kiếm</button>
									</li>
								</form>
							</ul>


						</li>


					</ul>

					<div class="navbar-right">
						<p class="navbar-text">Sắp xếp:</p>
						<ul class="nav navbar-nav">
							<li @if(isset($type_sort)) @if(strtoupper($type_sort) == 'ASC') class="active" @endif @endif><a href="{{route('admin/invoices').'?sort-name=1&type-sort=asc'}}"><i class="icon-sort-alpha-asc position-left"></i> Asc</a></li>
							<li @if(isset($type_sort)) @if(strtoupper($type_sort) == 'DESC') class="active" @endif @endif><a href="{{route('admin/invoices').'?sort-name=1&type-sort=desc'}}"><i class="icon-sort-alpha-desc position-left"></i> Desc</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /invoice grid options -->
			@if(isset($sort_price) || isset($type_sort))
			<div class="row">
				@foreach($data as $key => $value)

				<div class="col-md-6">
					<div class="panel invoice-grid">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-6">
									<h6 class="text-semibold no-margin-top">{{$value->first_name.' '.$value->last_name}}</h6>
									<ul class="list list-unstyled">
										<li>Mã hóa đơn #: &nbsp;{{$value->id}}</li>
										<li>Ngày đặt: <span class="text-semibold">{{date("d-m-Y", strtotime($value->invoice_date))}}</span></li>
									</ul>
								</div>

								<div class="col-sm-6">
									<h6 class="text-semibold text-right no-margin-top">{{$value->shipping + $value->tax + $value->amount_due}}<sup>đ</sup></h6>
									<ul class="list list-unstyled text-right">
										<li>Thanh toán: <span class="text-semibold">{{ucfirst($value->payment_type)}}</span></li>
										<li>
											Tình trạng: &nbsp;
											<p class="label @switch($value->status_id)
												@case(0)
												bg-success-400
												@break
												@case(1)
												bg-blue
												@break

												@case(2)
												bg-indigo-600
												@break
												@case(3)
												bg-brown-600
												@break
												@case(4)
												bg-danger-400
												@break
												@default
												bg-slate-400
												@endswitch dropdown-toggle" data-toggle="dropdown">{{$value->status_name}} <span class="scaret"></span></p>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel-footer panel-footer-condensed">
								<div class="heading-elements">
									<span class="heading-text">
										<span class="status-mark border-danger position-left"></span> Hạn giao: <span class="text-semibold">{{date('d-m-Y',strtotime($value->due_date))}}</span>
									</span>

									<ul class="list-inline list-inline-condensed heading-text pull-right">
										<li><a href="{{route('admin/invoices/profile').'?id='.$value->order_id}}" class="text-default"><i class="icon-eye8"></i></a></li>
										<li class="dropdown">
											<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#"><i class="icon-printer"></i> In hóa đơn</a></li>
												<li><a href="#"><i class="icon-file-download"></i> Tải hóa đơn</a></li>
												<li class="divider"></li>
												<li><a href="#"><i class="icon-cross2"></i> Xóa hóa đơn</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					@endforeach
				</div>

				@else
				<?php $date_cu = []?>
				@foreach($data as $key => $item)
				<?php
				$date_ = date("d-m-Y", strtotime($item->invoice_date));
				?>
				@if(!in_array($date_,$date_cu))
				<div class="text-center content-group text-muted content-divider">
					<span class="pt-10 pb-10">{{date("d-m-Y", strtotime($item->invoice_date))}}</span>
				</div>
				<div class="row">
					@foreach($data as $value)
					@if(date("d-m-Y", strtotime($value->invoice_date)) == date("d-m-Y", strtotime($item->invoice_date)))
					<div class="col-md-6">
						<div class="panel invoice-grid">
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<h6 class="text-semibold no-margin-top">{{$value->first_name.' '.$value->last_name}}</h6>
										<ul class="list list-unstyled">
											<li>Mã hóa đơn #: &nbsp;{{$value->id}}</li>
											<li>Ngày đặt: <span class="text-semibold">{{date("d-m-Y", strtotime($value->invoice_date))}}</span></li>
										</ul>
									</div>

									<div class="col-sm-6">
										<h6 class="text-semibold text-right no-margin-top">{{$value->shipping + $value->tax + $value->amount_due}}<sup>đ</sup></h6>
										<ul class="list list-unstyled text-right">
											<li>Thanh toán: <span class="text-semibold">{{ucfirst($value->payment_type) }}</span></li>
											<li>
												Tình trạng: &nbsp;
												<p class="label @switch($value->status_id)
													@case(0)
													bg-success-400
													@break
													@case(1)
													bg-blue
													@break

													@case(2)
													bg-indigo-600
													@break
													@case(3)
													bg-brown-600
													@break
													@case(4)
													bg-danger-400
													@break
													@default
													bg-slate-400
													@endswitch dropdown-toggle" data-toggle="dropdown">{{$value->status_name}} <span class="scaret"></span></p>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="panel-footer panel-footer-condensed">
									<div class="heading-elements">
										<span class="heading-text">
											<span class="status-mark border-danger position-left"></span> Hạn giao: <span class="text-semibold">{{date('d-m-Y',strtotime($value->due_date))}}</span>
										</span>

										<ul class="list-inline list-inline-condensed heading-text pull-right">
											<li><a href="{{route('admin/invoices/profile').'?id='.$value->order_id}}" class="text-default"><i class="icon-eye8"></i></a></li>
											<li class="dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-printer"></i> In hóa đơn</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Tải hóa đơn</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						@endif
						@endforeach
					</div>
					<?php array_push($date_cu,$date_) ?>
					@endif
					@endforeach
					@endif
					<!-- Invoice grid -->


					<!-- Pagination -->
					<div class="text-center content-group-lg pt-20">
						@if(isset($date))
						{{ $data->appends(['sort-date'=>1,'date'=>$date]) }}
						@elseif(isset($daterangepicker_end))
						{{$data->appends(['daterangepicker_end'=>$daterangepicker_end,'daterangepicker_start'=> $daterangepicker_start])}}
						@elseif(isset($sort_price) && isset($type))
						{{$data->appends(['type'=>$type,'sort-price'=> $sort_price])}}
						@elseif(isset($sort_price) && isset($from))
						{{$data->appends(['from'=>$from,'to'=>$to,'sort-price'=> $sort_price])}}
						@elseif(isset($sort_status))
						{{$data->appends(['status'=>$status,'sort-status'=> 1])}}
						@elseif(isset($sort_name))
						@if(isset($name))
						{{$data->appends(['sort_name'=>1,'name'=> $name])}}
						@elseif(isset($type_sort))
						{{$data->appends(['sort_name'=>1,'type-sort'=> $type_sort])}}
						@endif

						@else
						{{ $data}}
						@endif
					</div>
					<!-- /pagination -->


				</div>
			</div>
			<!-- /detached content -->


			<!-- Detached sidebar -->
			<div class="sidebar-detached">
				<div class="sidebar sidebar-default">
					<div class="sidebar-content">




						<!-- Navigation -->
						<div class="sidebar-category">
							<div class="category-title">
								<span>Chức năng</span>
								<ul class="icons-list">
									<li><a href="#" data-action="collapse"></a></li>
								</ul>
							</div>

							<div class="category-content no-padding">
								<ul class="navigation navigation-alt navigation-accordion">
									<li><a href="#"><i class="icon-googleplus5"></i> Tạo mới hóa đơn</a></li>
									<li><a href="#"><i class="icon-compose"></i> Edit invoice</a></li>
									<li><a href="#"><i class="icon-archive"></i> Archive <span class="badge badge-default">190</span></a></li>

								</ul>
							</div>
						</div>
						<!-- /navigation -->


						<!-- Filter -->
						<div class="sidebar-category">
							<div class="category-title">
								<span>Lọc hóa đơn</span>
								<ul class="icons-list">
									<li><a href="#" data-action="collapse"></a></li>
								</ul>
							</div>

							<div class="category-content">
								<form action="#">
									<div class="form-group">
										<label class="text-semibold">Giá trị đơn hàng:</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												0<sup>đ</sup> - 999<sup>đ</sup>
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												1,000<sup>đ</sup> - 1,999<sup>đ</sup>
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												2,000<sup>đ</sup> - 4,999<sup>đ</sup>
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												5,000<sup>đ</sup> - 9,999<sup>đ</sup>
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												10,000<sup>đ</sup> +
											</label>
										</div>
									</div>

									<div class="form-group">
										<label class="text-semibold">Kiểu thanh toán:</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												Giao hàng
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												Paypal
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												Payoneer
											</label>
										</div>


									</div>

									<div class="form-group">
										<label class="text-semibold">Tình trạng:</label>
										<div class="checkbox">
											<label>
												<input class="styled" type="checkbox">
												Đã quá hạn
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												Đang đợi
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												Đã giao hàng
											</label>
										</div>



										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												Đã hủy
											</label>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<button type="reset" class="btn btn-default btn-block btn-xs">Tạo lại</button>
										</div>

										<div class="col-xs-6">
											<button type="submit" class="btn btn-info btn-block btn-xs">Lọc</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- /filter -->


						<!-- Latest updates -->
						<div class="sidebar-category">
							<div class="category-title">
								<span>Lịch sử thanh toán</span>
								<ul class="icons-list">
									<li><a href="#" data-action="collapse"></a></li>
								</ul>
							</div>

							<div class="category-content">
								<ul class="media-list">
									<li class="media">
										<div class="media-left"><a href="#" class="btn border-success text-success btn-flat btn-icon btn-sm btn-rounded"><i class="icon-checkmark3"></i></a></div>
										<div class="media-body">
											<a href="#">Richard Vango</a> paid invoice #0020
											<div class="media-annotation">4 minutes ago</div>
										</div>
									</li>

									<li class="media">
										<div class="media-left"><a href="#" class="btn border-slate text-slate btn-flat btn-icon btn-sm btn-rounded"><i class="icon-infinite"></i></a></div>
										<div class="media-body">
											Invoice #0029 status has been changed to "On hold"
											<div class="media-annotation">36 minutes ago</div>
										</div>
									</li>

									<li class="media">
										<div class="media-left"><a href="#" class="btn border-success text-success btn-flat btn-icon btn-sm btn-rounded"><i class="icon-checkmark3"></i></a></div>
										<div class="media-body">
											<a href="#">Chris Arney</a> paid invoice #0031 with Paypal
											<div class="media-annotation">2 hours ago</div>
										</div>
									</li>

									<li class="media">
										<div class="media-left"><a href="#" class="btn border-danger text-danger btn-flat btn-icon btn-sm btn-rounded"><i class="icon-cross2"></i></a></div>
										<div class="media-body">
											Invoice #0041 has been canceled
											<div class="media-annotation">Dec 18, 18:36</div>
										</div>
									</li>

									<li class="media">
										<div class="media-left"><a href="#" class="btn border-primary text-primary btn-flat btn-icon btn-sm btn-rounded"><i class="icon-plus3"></i></a></div>
										<div class="media-body">
											New invoice #0029 has been sent to <a href="#">Beatrix Diaz</a>
											<div class="media-annotation">Dec 12, 05:46</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- /latest updates -->

					</div>
				</div>
			</div>
			<!-- /detached sidebar -->


			@include('admin.layouts.footer')

		</div>
		<!-- /content area -->
		<script>
			$(document).ready(function () {
				$('.daterange-basic').daterangepicker({
					applyClass: 'bg-slate-600',
					cancelClass: 'btn-default'
				});
//            $('.daterange-basic').AnyTime_picker({
//                format: "%d/%m/%Z"
//            });
})
</script>
</div>
<!-- /main content -->
@endsection