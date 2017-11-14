<?php
$theme_js_files = ['assets/js/plugins/visualization/d3/d3.min.js','assets/js/plugins/visualization/d3/d3_tooltip.js','assets/js/plugins/forms/styling/switchery.min.js','assets/js/plugins/forms/styling/uniform.min.js','assets/js/plugins/forms/selects/select2.min.js',
'assets/js/plugins/forms/selects/bootstrap_multiselect.js',
'assets/js/plugins/ui/moment/moment.min.js',
'assets/js/plugins/pickers/daterangepicker.js',
'assets/js/core/app.js',
'assets/js/pages/dashboard.js',
'assets/js/build/custom.js'
];
$html_theme_js_files = '';

$count = count($theme_js_files);
for ($i=0; $i < $count ; $i++)  {
	$html_theme_js_files = $html_theme_js_files.'<script type="text/javascript" src="'.asset($theme_js_files[$i]).'"></script>'	;
}

?>

@extends('admin.layouts.admin')


@section('titler','Admin-BigShop')

@push('scripts')
<?php 
echo $html_theme_js_files;
?>
@endpush



@section('content')

<div class="content-wrapper">


	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Bigshop</span> - Home </h4>
			</div>
			@include('admin.layouts.menu-action')
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li class="active"><a href="{{route('admin/index')}}"><i class="icon-home2 position-left"></i> Home/</a></li>
			</ul>

		</div>
	</div>


	<div class="content">

		
		<div class="row">
			<div class="col-lg-4">

				
				<div class="panel bg-teal-400">
					<div class="panel-body">
						<div class="heading-elements">
							<span class="heading-text badge bg-teal-800">+53,6%</span>
						</div>

						<h3 class="no-margin">3,450</h3>
						Người dùng
						<div class="text-muted text-size-small">489 mới</div>
					</div>

				</div>
				

			</div>

			<div class="col-lg-4">

				<div class="panel bg-pink-400">
					<div class="panel-body">
						<div class="heading-elements">
							<ul class="icons-list">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-sync"></i> Update data</a></li>
										<li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
										<li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
										<li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
									</ul>
								</li>
							</ul>
						</div>

						<h3 class="no-margin">20</h3>
						Đơn hàng đang đợi
						<div class="text-muted text-size-small">500 đơn hàng</div>
					</div>

					<div id="server-load"></div>
				</div>
				

			</div>

			<div class="col-lg-4">

				<div class="panel bg-blue-400">
					<div class="panel-body">
						<div class="heading-elements">
							<ul class="icons-list">
								<li><a data-action="reload"></a></li>
							</ul>
						</div>

						<h3 class="no-margin">2000<sup>đ</sup></h3>
						Doanh thu
						<div class="text-muted text-size-small">15% tăng</div>
					</div>

					<div id="today-revenue"></div>
				</div>
				

			</div>
		</div>
		
		<div class="row">

			<div class="col-lg-12">

				
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h6 class="panel-title">Thống kê doanh thu</h6>
						<div class="heading-elements" style="display: none">
							<form class="heading-form" action="#">
								<div class="form-group">
									<select class="change-date select-sm" id="select_date">
										<optgroup label="<i class='icon-watch pull-right'></i> Time period">
											<option value="val1" selected="selected">June, 29 - July, 5</option>
										</optgroup>
									</select>
								</div>
							</form>
						</div>
						<div class="heading-elements">
							<button type="button" class="btn btn-link daterange-ranges  heading-btn text-semibold">
								<i class="icon-calendar3 position-left"></i> <span></span> <b class="caret"></b>
							</button>
							<ul class="icons-list" style="display: none">
								<li><a data-action="reload" id="reloaddata"></a></li>
							</ul>
						</div>
					</div>


					<div class="content-group-sm" id="app_sales"></div>
					<div id="monthly-sales-stats"></div>
				</div>
				

			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h6 class="panel-title">Sự kiện đang chạy</h6>

					</div>
					<div class="table-responsive">
						<table class="table text-nowrap">
							<thead>
								<tr>
									<th style="width: 50px">Hạn thời gian</th>
									<th style="width: 300px;">Người tạo</th>
									<th>Miêu tả</th>
									<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">
										<h6 class="no-margin">16 <small class="display-block text-size-small no-margin">giờ</small></h6>
									</td>
									<td>
										<div class="media-left media-middle">
											<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
										</div>

										<div class="media-body">
											<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
											<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
										</div>
									</td>
									<td>
										<a href="#" class="text-default display-inline-block">
											<span class="text-semibold">[#1249] Khuyến mãi</span>
											<span class="display-block text-muted">Khuyễn mãi...</span>
										</a>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-undo"></i> Tạm ngưng</a></li>
													<li><a href="#"><i class="icon-history"></i> Gia hạn</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-checkmark3 text-success"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-cross2 text-danger"></i> Hủy</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="text-center">
										<h6 class="no-margin">16 <small class="display-block text-size-small no-margin">giờ</small></h6>
									</td>
									<td>
										<div class="media-left media-middle">
											<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
										</div>

										<div class="media-body">
											<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
											<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
										</div>
									</td>
									<td>
										<a href="#" class="text-default display-inline-block">
											<span class="text-semibold">[#1249] Khuyến mãi</span>
											<span class="display-block text-muted">Khuyễn mãi...</span>
										</a>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-undo"></i> Tạm ngưng</a></li>
													<li><a href="#"><i class="icon-history"></i> Gia hạn</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-checkmark3 text-success"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-cross2 text-danger"></i> Hủy</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="text-center">
										<h6 class="no-margin">16 <small class="display-block text-size-small no-margin">giờ</small></h6>
									</td>
									<td>
										<div class="media-left media-middle">
											<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
										</div>

										<div class="media-body">
											<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
											<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
										</div>
									</td>
									<td>
										<a href="#" class="text-default display-inline-block">
											<span class="text-semibold">[#1249] Khuyến mãi</span>
											<span class="display-block text-muted">Khuyễn mãi...</span>
										</a>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-undo"></i> Tạm ngưng</a></li>
													<li><a href="#"><i class="icon-history"></i> Gia hạn</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-checkmark3 text-success"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-cross2 text-danger"></i> Hủy</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="text-center">
										<h6 class="no-margin">16 <small class="display-block text-size-small no-margin">giờ</small></h6>
									</td>
									<td>
										<div class="media-left media-middle">
											<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
										</div>

										<div class="media-body">
											<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
											<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
										</div>
									</td>
									<td>
										<a href="#" class="text-default display-inline-block">
											<span class="text-semibold">[#1249] Khuyến mãi</span>
											<span class="display-block text-muted">Khuyễn mãi...</span>
										</a>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-undo"></i> Tạm ngưng</a></li>
													<li><a href="#"><i class="icon-history"></i> Gia hạn</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-checkmark3 text-success"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-cross2 text-danger"></i> Hủy</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="text-center">
										<h6 class="no-margin">16 <small class="display-block text-size-small no-margin">giờ</small></h6>
									</td>
									<td>
										<div class="media-left media-middle">
											<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
										</div>

										<div class="media-body">
											<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
											<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
										</div>
									</td>
									<td>
										<a href="#" class="text-default display-inline-block">
											<span class="text-semibold">[#1249] Khuyến mãi</span>
											<span class="display-block text-muted">Khuyễn mãi...</span>
										</a>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-undo"></i> Tạm ngưng</a></li>
													<li><a href="#"><i class="icon-history"></i> Gia hạn</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-checkmark3 text-success"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-cross2 text-danger"></i> Hủy</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="text-center">
										<h6 class="no-margin">16 <small class="display-block text-size-small no-margin">giờ</small></h6>
									</td>
									<td>
										<div class="media-left media-middle">
											<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
										</div>

										<div class="media-body">
											<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
											<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
										</div>
									</td>
									<td>
										<a href="#" class="text-default display-inline-block">
											<span class="text-semibold">[#1249] Khuyến mãi</span>
											<span class="display-block text-muted">Khuyễn mãi...</span>
										</a>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-undo"></i> Tạm ngưng</a></li>
													<li><a href="#"><i class="icon-history"></i> Gia hạn</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-checkmark3 text-success"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-cross2 text-danger"></i> Hủy</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="text-center">
										<h6 class="no-margin">16 <small class="display-block text-size-small no-margin">giờ</small></h6>
									</td>
									<td>
										<div class="media-left media-middle">
											<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
										</div>

										<div class="media-body">
											<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
											<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
										</div>
									</td>
									<td>
										<a href="#" class="text-default display-inline-block">
											<span class="text-semibold">[#1249] Khuyến mãi</span>
											<span class="display-block text-muted">Khuyễn mãi...</span>
										</a>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-undo"></i> Tạm ngưng</a></li>
													<li><a href="#"><i class="icon-history"></i> Gia hạn</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-checkmark3 text-success"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-cross2 text-danger"></i> Hủy</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="text-center">
										<h6 class="no-margin">16 <small class="display-block text-size-small no-margin">giờ</small></h6>
									</td>
									<td>
										<div class="media-left media-middle">
											<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
										</div>

										<div class="media-body">
											<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
											<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
										</div>
									</td>
									<td>
										<a href="#" class="text-default display-inline-block">
											<span class="text-semibold">[#1249] Khuyến mãi</span>
											<span class="display-block text-muted">Khuyễn mãi...</span>
										</a>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-undo"></i> Tạm ngưng</a></li>
													<li><a href="#"><i class="icon-history"></i> Gia hạn</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-checkmark3 text-success"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-cross2 text-danger"></i> Hủy</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="text-center">
										<h6 class="no-margin">16 <small class="display-block text-size-small no-margin">giờ</small></h6>
									</td>
									<td>
										<div class="media-left media-middle">
											<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
										</div>

										<div class="media-body">
											<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
											<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
										</div>
									</td>
									<td>
										<a href="#" class="text-default display-inline-block">
											<span class="text-semibold">[#1249] Khuyến mãi</span>
											<span class="display-block text-muted">Khuyễn mãi...</span>
										</a>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-undo"></i> Tạm ngưng</a></li>
													<li><a href="#"><i class="icon-history"></i> Gia hạn</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-checkmark3 text-success"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-cross2 text-danger"></i> Hủy</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="text-center">
										<h6 class="no-margin">16 <small class="display-block text-size-small no-margin">giờ</small></h6>
									</td>
									<td>
										<div class="media-left media-middle">
											<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
										</div>

										<div class="media-body">
											<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
											<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
										</div>
									</td>
									<td>
										<a href="#" class="text-default display-inline-block">
											<span class="text-semibold">[#1249] Khuyến mãi</span>
											<span class="display-block text-muted">Khuyễn mãi...</span>
										</a>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-undo"></i> Tạm ngưng</a></li>
													<li><a href="#"><i class="icon-history"></i> Gia hạn</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-checkmark3 text-success"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-cross2 text-danger"></i> Hủy</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				



			</div>

			<div class="col-lg-4">
				
				<div class="panel panel-flat">
					<div class="panel-heading">
						<div class="heading-elements">
							<span class="heading-text" id="time-now"></span>
							<span class="label bg-success heading-text">Online</span>
						</div>
					</div>

					
					<div class="container-fluid">
						<div class="row text-center">
							<div class="col-md-4">
								<div class="content-group">
									<h6 class="text-semibold no-margin"><a href="#"><i class="icon-clipboard3 position-left text-slate"></i></a> 2,345</h6>
									<span class="text-muted text-size-small">Trong tuần</span>
								</div>
							</div>

							<div class="col-md-4">
								<div class="content-group">
									<h6 class="text-semibold no-margin"><a href="#"><i class="icon-calendar3 position-left text-slate"></i></a> 3,568</h6>
									<span class="text-muted text-size-small">Trong tháng</span>
								</div>
							</div>

							<div class="col-md-4">
								<div class="content-group">
									<h6 class="text-semibold no-margin"><a href="#"><i class="icon-comments position-left text-slate"></i></a> 32,693</h6>
									<span class="text-muted text-size-small">Tất cả</span>
								</div>
							</div>
						</div>
					</div>
					
					<div id="messages-stats"></div>
					
					<ul class="nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-indigo-400 border-top border-top-indigo-300">
						<li class="active">
							<a href="#messages-tue" class="text-size-small text-uppercase" data-toggle="tab">
								Tiến trình
							</a>
						</li>

						<li>
							<a href="#messages-mon" class="text-size-small text-uppercase" data-toggle="tab">
								Tin nhắn
							</a>
						</li>
					</ul>
					
					<div class="tab-content">
						<div class="tab-pane active fade in has-padding" id="messages-tue">
							<ul class="media-list">
								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
										<span class="badge bg-danger-400 media-badge">8</span>
									</div>

									<div class="media-body">
										<a href="#">
											James Alexander
											<span class="media-annotation pull-right">14:58</span>
										</a>

										<span class="display-block text-muted">The constitutionally inventoried precariously...</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
										<span class="badge bg-danger-400 media-badge">6</span>
									</div>

									<div class="media-body">
										<a href="#">
											Margo Baker
											<span class="media-annotation pull-right">12:16</span>
										</a>

										<span class="display-block text-muted">Pinched a well more moral chose goodness...</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
									</div>

									<div class="media-body">
										<a href="#">
											Jeremy Victorino
											<span class="media-annotation pull-right">09:48</span>
										</a>

										<span class="display-block text-muted">Pert thickly mischievous clung frowned well...</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
									</div>

									<div class="media-body">
										<a href="#">
											Beatrix Diaz
											<span class="media-annotation pull-right">05:54</span>
										</a>

										<span class="display-block text-muted">Nightingale taped hello bucolic fussily cardinal...</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
									</div>

									<div class="media-body">
										<a href="#">
											Richard Vango
											<span class="media-annotation pull-right">01:43</span>
										</a>

										<span class="display-block text-muted">Amidst roadrunner distantly pompously where...</span>
									</div>
								</li>
								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
									</div>

									<div class="media-body">
										<a href="#">
											Richard Vango
											<span class="media-annotation pull-right">01:43</span>
										</a>

										<span class="display-block text-muted">Amidst roadrunner distantly pompously where...</span>
									</div>
								</li>
								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
									</div>

									<div class="media-body">
										<a href="#">
											Richard Vango
											<span class="media-annotation pull-right">01:43</span>
										</a>

										<span class="display-block text-muted">Amidst roadrunner distantly pompously where...</span>
									</div>
								</li>
								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
									</div>

									<div class="media-body">
										<a href="#">
											Richard Vango
											<span class="media-annotation pull-right">01:43</span>
										</a>

										<span class="display-block text-muted">Amidst roadrunner distantly pompously where...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="tab-pane fade has-padding" id="messages-mon">
							<ul class="media-list">
								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									</div>

									<div class="media-body">
										<a href="#">
											Isak Temes
											<span class="media-annotation pull-right">Tue, 19:58</span>
										</a>

										<span class="display-block text-muted">Reasonable palpably rankly expressly grimy...</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									</div>

									<div class="media-body">
										<a href="#">
											Vittorio Cosgrove
											<span class="media-annotation pull-right">Tue, 16:35</span>
										</a>

										<span class="display-block text-muted">Arguably therefore more unexplainable fumed...</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									</div>

									<div class="media-body">
										<a href="#">
											Hilary Talaugon
											<span class="media-annotation pull-right">Tue, 12:16</span>
										</a>

										<span class="display-block text-muted">Nicely unlike porpoise a kookaburra past more...</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									</div>

									<div class="media-body">
										<a href="#">
											Bobbie Seber
											<span class="media-annotation pull-right">Tue, 09:20</span>
										</a>

										<span class="display-block text-muted">Before visual vigilantly fortuitous tortoise...</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									</div>

									<div class="media-body">
										<a href="#">
											Walther Laws
											<span class="media-annotation pull-right">Tue, 03:29</span>
										</a>

										<span class="display-block text-muted">Far affecting more leered unerringly dishonest...</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					

				</div>
				




			</div>
		</div>
		


		@include('admin.layouts.footer')

	</div>


</div>

@endsection