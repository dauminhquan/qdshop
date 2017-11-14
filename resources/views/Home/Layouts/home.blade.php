<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <!--/tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--//tags -->
        <link href="{{asset('home/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('home/css/team.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('home/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('home/css/font-awesome.css')}}" rel="stylesheet"> 
        <link href="{{asset('home/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
        <link href="{{asset('home/css/team.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!-- //for bootstrap working -->
         @section('css')
        @show
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    </head>
    <body>


		@include('home.layouts.head')
		@include('home.layouts.banner')
        @section('content')
        @show
		@include('home.layouts.footer')
        @section('script')
        @show
    </body>
</html>
