<?php
	$js = ['ckeditor/ckeditor.js','assets/js/core/app.js','assets/js/pages/invoice_template.js',];
	$html_js = '';
	$count = count($js);
	for ($i=0; $i < $count ; $i++)  {
	$html_js = $html_js.'<script type="text/javascript" src="'.asset($js[$i]).'"></script>'	;
}
 ?>

@extends('admin.layouts.admin')
@section('title','BigShop | Invoice Profile')
@push('scripts')
<?php 
echo $html_js;
?>
@endpush

@section('content')
<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Hóa đơn</span> - #49029</h4>

				<ul class="breadcrumb position-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="invoice_template.html">Hóa đơn</a></li>
					<li class="active">Chỉnh sửa</li>
				</ul>
			</div>

			@include('admin.layouts.menu-action')
		</div>
	</div>
	<!-- /page header -->



	<!-- Content area -->
	<div class="content">
		<!-- Editable invoice -->
		<div class="panel panel-white">
			<div class="panel-heading">
				<h6 class="panel-title">Chỉnh sửa hóa đơn</h6>
				<div class="heading-elements">
					<button type="button" class="btn btn-default btn-xs heading-btn"><i class="icon-file-check position-left"></i> Tải xuống</button>
					<button type="button" class="btn btn-default btn-xs heading-btn" id="print-invoice"><i class="icon-printer position-left"></i> In ra</button>
					<button type="button" class="btn btn-primary btn-xs heading-btn" id="readOnlyOn" style=""><i class="icon-eye2 position-left"></i> Chế độ chỉ xem</button>
					<button type="button" class="btn btn-success btn-xs heading-btn" id="readOnlyOff" style="display: none;"><i class="icon-eye-blocked2 position-left"></i> Chế độ sửa</button>
				</div>
			</div>

			<div id="invoice-editable" contenteditable="true">
				<div class="panel-body no-padding-bottom">
					<div class="row">
						<div class="col-sm-6 content-group">
							<img src="assets/images/logo_demo.png" class="content-group mt-10" alt="" style="width: 120px;">
							<ul class="list-condensed list-unstyled">
								<li>29/39 Kim Giang, Hoàng Mai</li>
								<li>Hà Nội, Việt Nam</li>
								<li>0123-456-7890</li>
							</ul>
						</div>

						<div class="col-sm-6 content-group">
							<div class="invoice-details">
								<h5 class="text-uppercase text-semibold">Mã đơn hàng: #49029</h5>
								<ul class="list-condensed list-unstyled">
									<li>Ngày đặt: <span class="text-semibold">January 12, 2015</span></li>
									<li>Ngày thanh toán: <span class="text-semibold">May 12, 2015</span></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-lg-9 content-group">
							<span class="text-muted">Đơn hàng đến:</span>
							<ul class="list-condensed list-unstyled">
								<li><h5>Đậu Minh Quân</h5></li>
								<li><span class="text-semibold">Nhà số 40 Kim Giang,Hoàng Mai</span></li>
								<li>Hà Nội, Việt Nam</li>
								<li>0123-456-789</li>
								<li><a href="#">dauminhquan@gmail.com</a></li>
							</ul>
						</div>

						<div class="col-md-6 col-lg-3 content-group">
							<span class="text-muted">Hình thức thanh toán:</span>
							<ul class="list-condensed list-unstyled invoice-payment-details">
								<li><h5>Tổng tiền: <span class="text-right text-semibold">450,000<sup>đ</sup></span></h5></li>
								<li>Hình thức: <span class="text-semibold">Giao tiền khi nhận hàng</span></li>
								<span class="text-muted">Nơi nhận hàng:</span>
								<li>Quốc gia: <span>Việt Nam</span></li>
								<li>Thành phố: <span>Hà Nội</span></li>
								<li>Địa chỉ: <span>100 Kim Giang,Hoàng Mai</span></li>
								<li>SWIFT Mã giảm giá: <span class="text-semibold">Không có</span></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="table-responsive">
					<table class="table table-lg">
						<thead>
							<tr>
								<th>Chi tiết hóa đơn</th>
								<th class="col-sm-1">Số lượng</th>
								<th class="col-sm-1">Giá</th>
								<th class="col-sm-1">Giảm giá</th>
								<th class="col-sm-1">Tổng tiền</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<h6 class="no-margin">Áo khoác: Xanh - Mã số: #22233</h6>
									<span class="text-muted">Không có ghi chú.</span>
								</td>
								<td>5</td>
								<td>70,000<sup>đ</sup></td>
								<td>20%</td>
								<td><span class="text-semibold">50,000<sup>đ</sup></span></td>
							</tr>

						</tbody>
					</table>
				</div>

				<div class="panel-body">
					<div class="row invoice-payment">
						<div class="col-sm-7">
							<div class="content-group">
								<h6>Người duyệt đơn</h6>
								<div class="mb-15 mt-15">
									<img src="assets/images/signature.png" class="display-block" style="width: 150px;" alt="">
								</div>

								<ul class="list-condensed list-unstyled text-muted">
									<li>Đậu Minh Quân</li>
									<li>2269 Elba Lane</li>
									<li>Paris, France</li>
									<li>888-555-2311</li>
								</ul>
							</div>
						</div>

						<div class="col-sm-5">
							<div class="content-group">
								<h6>Tổng cộng</h6>
								<div class="table-responsive no-border">
									<table class="table">
										<tbody>
											<tr>
												<th>Giá tiền:</th>
												<td class="text-right">70,000<sup>đ</sup></td>
											</tr>
											<tr>
												<th>Phí giao hàng: <span class="text-regular">20,000<sup>đ</sup></span></th>
												<td class="text-right">$1,750</td>
											</tr>
											<tr>
												<th>Tất cả:</th>
												<td class="text-right text-primary"><h5 class="text-semibold">90,000<sup>đ</sup></h5></td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="text-right">
									<button type="button" class="btn btn-primary btn-labeled"><b><i class="icon-paperplane"></i></b> Gửi hóa đơn</button>
								</div>
							</div>
						</div>
					</div>

					<h6>Lời cảm ơn:</h6>
					<p class="text-muted">Cảm ơn bạn đã sử dụng dịch vụ. Hóa đơn của bạn sẽ được ...</p>
				</div>
			</div>
		</div>
		<!-- /editable invoice -->


		@include('admin.layouts.footer')

	</div>
	<!-- /content area -->

</div>
<script type="text/javascript">
        $("#print-invoice").click(function () {
            var divContents = $("#invoice-editable").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>Hóa đơn bán hàng</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>

<!-- /main content -->
@endsection