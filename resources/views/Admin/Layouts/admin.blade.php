<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="{{asset('assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	
	@stack('scripts')
</head>

<body class="pace-done @section('class-body') @show">

	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{route('admin/index')}}"><img src="{{asset('assets/images/logo_light.png')}}" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
				@section('mobile')
				@show

			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li>
					<a class="sidebar-control sidebar-main-toggle hidden-xs">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
				@section('minmax-invoice')
				@show
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="visible-xs-inline-block position-right">Git updates</span>
						<span class="badge bg-warning-400">9</span>
					</a>

					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-heading">
							Git updates
							<ul class="icons-list">
								<li><a href="#"><i class="icon-sync"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body width-350">
							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>

								<div class="media-body">
									Drop the IE <a href="#">specific hacks</a> for temporal inputs
									<div class="media-annotation">4 minutes ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
								</div>

								<div class="media-body">
									Add full font overrides for popovers and tooltips
									<div class="media-annotation">36 minutes ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
								</div>

								<div class="media-body">
									<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
									<div class="media-annotation">2 hours ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
								</div>

								<div class="media-body">
									<a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
									<div class="media-annotation">Dec 18, 18:36</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>

								<div class="media-body">
									Have Carousel ignore keyboard events
									<div class="media-annotation">Dec 12, 05:46</div>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>
			</ul>

			<p class="navbar-text"><span class="label bg-success">Online</span></p>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{asset('assets/images/flags/gb.png')}}" class="position-left" alt="">
						English
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a class="deutsch"><img src="{{asset('assets/images/flags/de.png')}}" alt=""> Deutsch</a></li>
						<li><a class="ukrainian"><img src="{{asset('assets/images/flags/ua.png')}}" alt=""> Українська</a></li>
						<li><a class="english"><img src="{{asset('assets/images/flags/gb.png')}}" alt=""> English</a></li>
						<li><a class="espana"><img src="{{asset('assets/images/flags/es.png')}}" alt=""> España</a></li>
						<li><a class="russian"><img src="{{asset('assets/images/flags/ru.png')}}" alt=""> Русский</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="visible-xs-inline-block position-right">Tin nhắn mới</span>
						<span class="badge bg-warning-400">2</span>
					</a>

					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Tin nhắn
							<ul class="icons-list">
								<li><a href="#"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-left">
									<img src="{{asset('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">5</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">James Alexander</span>
										<span class="media-annotation pull-right">04:58</span>
									</a>

									<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<img src="{{asset('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">4</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Margo Baker</span>
										<span class="media-annotation pull-right">12:16</span>
									</a>

									<span class="text-muted">That was something he was unable to do because...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="{{asset('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Jeremy Victorino</span>
										<span class="media-annotation pull-right">22:48</span>
									</a>

									<span class="text-muted">But that would be extremely strained and suspicious...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="{{asset('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Beatrix Diaz</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>

									<span class="text-muted">What a strenuous career it is that I've chosen...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="{{asset('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Richard Vango</span>
										<span class="media-annotation pull-right">Mon</span>
									</a>

									<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{asset('assets/images/placeholder.jpg')}}" alt="">
						<span>Victoria</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> Thông tin tài khoản</a></li>
						<li><a href="#"><i class="icon-coins"></i> Lịch sử hoạt động</a></li>
						<li class="divider"></li>

						<li><a href="#"><i class="icon-switch2"></i> Đăng xuất</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	


	
	<div class="page-container">

		
		<div class="page-content">

			
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="{{asset('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					


					
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="{{route('admin/index')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>

									<a href="#"><i class="icon-user-tie"></i> <span>Thông tin cá nhân</span></a>

								</li>
								<li>

									<a href="#"><i class="glyphicon glyphicon-user"></i> <span>Nhân viên</span></a>
									<ul>
										<li>	
											<a href="{{route('admin/employees')}}">
												Tất cả nhân viên
											</a>
										</li>

										<li><a href="{{route('admin/employees/add')}}">Thêm mới nhân viên</a></li>
										<li class="navigation-divider"></li>
										<li><a href="{{route('admin/employees/add')}}">Quản lý quyền truy cập</a></li>
										
									</ul>

								</li>

								<li>

									<a href="#"><i class="icon-people"></i> <span>Khách hàng</span></a>
									<ul>
										<li>
											<a href="{{route('admin/customers')}}">
												Tất cả khách hàng
											</a>
										</li>

										<li><a href="{{route('admin/customers/add')}}">Thêm mới khách hàng</a></li>

										<li class="navigation-divider"></li>
										<li><a href="{{route('admin/customers/add')}}">Thống kê xu hướng người dùng</a></li>
									</ul>
								</li>

								<li>

									<a href="#"><i class="icon-cart2"></i> <span>Đơn hàng</span></a>
									<ul>
										<li>
											<a href="{{route('admin/invoices')}}">
												Tất cả đơn hàng
											</a>
										</li>

										<li><a href="{{route('admin/invoices/add')}}">Thêm mới đơn hàng</a></li>

										<li class="navigation-divider"></li>
										<li>
											<a href="{{route('admin/invoices')}}">
												Quản lý nhập hàng
											</a>
										</li>
										<li>
											<a href="{{route('admin/invoices')}}">
												Thêm mới phiếu nhập hàng
											</a>
										</li>
									</ul>

								</li>
								<li>
									<a href="#"><i class="icon-menu5"></i> <span>Sản phẩm</span></a>
									<ul>
										<li>
											<a href="{{route('admin/products')}}">
												Tất cả sản phẩm
											</a>
										</li>
										<li>
											<a href="{{route('admin/products/add')}}">
												Thêm mới sản phẩm
											</a>
										</li>


										<li class="navigation-divider"></li>
										<li>
											<a href="{{route('admin/products/types')}}">
												Quản lý loại sản phẩm
											</a>
										</li>
										<li class="navigation-divider"></li>
										<li>
											<a href="{{route('admin/products/groups')}}">
												Quản lý nhóm sản phẩm
											</a>
										</li>
										<li class="navigation-divider"></li>
										<li>
											<a href="{{route('admin/products')}}">
												Quản lý hiển thị sản phẩm
											</a>
										</li>
									</ul>
								</li>
								<li><a href="#"><i class="icon-price-tags"></i> <span>Khuyến mãi <span class="label bg-blue-400">1.5</span></span></a></li>
								<li><a href="{{route('admin/statistics')}}"><i class="icon-stats-dots"></i> <span>Thống kê</span></a></li>

								<li class="navigation-header"><span>Theme</span> <i class="icon-menu" title="Cài đặt giao diện người dùng"></i></li>
								<li>
									<a href="#"><i class="icon-pencil3"></i> <span>Chỉnh sửa theme</span></a>
								</li>
								<li>
									<a href="#"><i class="icon-file-css"></i> <span>Tải thêm theme</span></a>
									<ul>
										<li><a href="alpaca_basic.html">Hot</a></li>
										<li><a href="alpaca_advanced.html">Free</a></li>
										<li><a href="alpaca_controls.html">Controls</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-footprint"></i> <span>Hỗ trợ</span></a>
									<ul>
										<li><a href="wizard_steps.html">Gửi Email</a></li>
										<li><a href="wizard_form.html">Truy cập website</a></li>
									</ul>
								</li>




							</ul>
						</div>
					</div>


				</div>
			</div>


			@yield('content')


		</div>


	</div>

	<script type="text/javascript">
		function time_now() {
			var time = new Date()
			var h = time.getHours()
			var d = time.getDate()
			var m =time.getMonth()+1
			var p = time.getMinutes()
			var y = time.getFullYear()
			var s = time.getSeconds()
			$('#time-now').html('<i class="icon-history text-warning position-left" id="time-online"></i>'+  d+'/'+m+'/'+y+', '+h+':'+p+':'+s)

			//$('#time-online').after();
			setTimeout(time_now,1000)
		}
		time_now()

	</script>
	<script>
		jQuery(document).ready(function($) {
			var url = window.location
			$('li').removeClass('active')
			if($('li>a[href="'+url+'"]').parents('ul:eq(0)').hasClass('hidden-ul'))
			{
				$('li>a[href="'+url+'"]').parents('ul:eq(0)').css('display', 'block');
				$('li>a[href="'+url+'"]').parents('li:eq(1)').addClass('active')
				
			}
			
			$('li>a[href="'+url+'"]').parent().addClass('active')
			
		});
	</script>
	@section('text-script')
	@show
</body>
</html>
