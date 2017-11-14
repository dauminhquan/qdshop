
<?php
$js = ['assets/js/plugins/visualization/echarts/echarts.js','assets/js/core/app.js','assets/js/charts/echarts/combinations.js'];
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
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">ECharts</span> - Combinations</h4>
			</div>

			@include('admin.layouts.menu-action')
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="{{route('admin/index')}}"><i class="icon-home2 position-left"></i> Home</a></li>
				<li class="active">Thống kê</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">

		<!-- Combination and connection -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Thống kê doanh số theo tuần</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						<li><a data-action="close"></a></li>
					</ul>
				</div>
			</div>

			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<div class="chart-container">
							<div class="chart has-fixed-height" id="connect_pie"></div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="chart-container">
							<div class="chart has-fixed-height" id="connect_column"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /combination and connection -->


		<!-- Line and bar combination -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Thống kê doanh thu trong tuần</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						<li><a data-action="close"></a></li>
					</ul>
				</div>
			</div>

			<div class="panel-body">
				<div class="chart-container">
					<div class="chart has-fixed-height" id="line_bar"></div>
				</div>
			</div>
		</div>
		<!-- /line and bar combination -->


		<!-- Column and pie combination -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Column and pie combination</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						<li><a data-action="close"></a></li>
					</ul>
				</div>
			</div>

			<div class="panel-body">
				<div class="chart-container">
					<div class="chart has-fixed-height" id="column_pie"></div>
				</div>
			</div>
		</div>
		<!-- /column and pie combination -->


		<!-- Scatter and pie combination -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Scatter and pie combination</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						<li><a data-action="close"></a></li>
					</ul>
				</div>
			</div>

			<div class="panel-body">
				<div class="chart-container">
					<div class="chart has-fixed-height" id="scatter_pie"></div>
				</div>
			</div>
		</div>
		<!-- /scatter and pie combination -->


		<!-- Scatter and line combination -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Scatter and line combination</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						<li><a data-action="close"></a></li>
					</ul>
				</div>
			</div>

			<div class="panel-body">
				<div class="chart-container">
					<div class="chart has-fixed-height" id="scatter_line"></div>
				</div>
			</div>
		</div>
		<!-- /scatter and line combination -->


		<!-- Dynamic data -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Dynamic data</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						<li><a data-action="close"></a></li>
					</ul>
				</div>
			</div>

			<div class="panel-body">
				<div class="chart-container">
					<div class="chart has-fixed-height" id="candlestick_scatter" style="height: 500px;"></div>
				</div>
			</div>
		</div>
		<!-- /dynamic data -->


		@include('admin.layouts.footer')

	</div>
	<!-- /content area -->
	<!-- <script>
		jQuery(document).ready(function($) {
			alert("Url  ="+document.location);
alert("PathName  ="+ window.location.pathname);// Returns path only
alert("url  ="+window.location.href);// Returns full URL
});
</script> -->
</div>
<!-- /main content -->
@endsection