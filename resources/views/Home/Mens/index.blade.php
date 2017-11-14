@extends('home.layouts.home')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('home/css/jquery-ui.css')}}">
@endsection

@section('content')

<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
	<div class="container">
		<h3>Men's <span>Wear  </span></h3>
		<!--/w3_short-->
		<div class="services-breadcrumb">
			<div class="agile_inner_breadcrumb">

				<ul class="w3_short">
					<li><a href="index.html">Home</a><i>|</i></li>
					<li>Men's Wear</li>
				</ul>
			</div>
		</div>
		<!--//w3_short-->
	</div>
</div>

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<!-- mens -->
		<div class="col-md-12 products-right">
			<h5>Product <span>Compare(0)</span></h5>
			<form action="index_submit" method="get" accept-charset="utf-8">
				<div class="sort-grid">
					<div class="all-sort">
						<div class="sorting">
							<h6>Sắp xếp theo:</h6>
							<select class="frm-field required sect">
								<option value="null">Mặc định</option>
								<option value="null">Tên(A - Z)</option> 
								<option value="null">Tên(Z - A)</option>
								<option value="null">Giá(Cao - Thấp)</option>
								<option value="null">Giá(Thấp - Cao)</option>				
							</select>
							<div class="clearfix"></div>
						</div>
						<div class="sorting">
							<h6>Hiển thị</h6>
							<select class="frm-field required sect">
								<option value="null">10</option>
								<option value="null">20</option> 
								<option value="null">50</option>					
								<option value="null">Tất cả</option>								
							</select>
							<div class="clearfix"></div>
						</div>
						<div class="submit-sort">
							<button type="submit" class="btn btn-info">Sắp xếp</button>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</form>
			
			<div class="men-wear-top">
				
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsive" src="{{asset('home/images/banner2.jpg')}}" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="{{asset('home/images/banner5.jpg')}}" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="{{asset('home/images/banner2.jpg')}}" alt=" "/>
						</li>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-bottom">
				<div class="col-sm-4 men-wear-left">
					<img class="img-responsive" src="{{asset('home/images/bb2.jpg')}}" alt=" " />
				</div>
				<div class="col-sm-8 men-wear-right">
					<h4>Exclusive Men's <span>Collections</span></h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
						accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
						ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
						explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
					odit aut fugit. </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		<div class="single-pro">
			<div class="col-xs-6 col-sm-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="{{asset('home/images/m1.jpg')}}" alt="" class="pro-image-front">
						<img src="{{asset('home/images/m1.jpg')}}" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="single.html" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
						<span class="product-new-top">New</span>

					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">Formal Blue Shirt</a></h4>
						<div class="info-product-price">
							<span class="item_price">$45.99</span>
							<del>$69.71</del>
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Formal Blue Shirt" />
									<input type="hidden" name="amount" value="30.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="{{asset('home/images/m2.jpg')}}" alt="" class="pro-image-front">
						<img src="{{asset('home/images/m2.jpg')}}" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="single.html" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
						<span class="product-new-top">New</span>

					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">Gabi Full Sleeve Sweatshirt</a></h4>
						<div class="info-product-price">
							<span class="item_price">$45.99</span>
							<del>$69.71</del>
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Sweatshirt" />
									<input type="hidden" name="amount" value="30.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="{{asset('home/images/m3.jpg')}}" alt="" class="pro-image-front">
						<img src="{{asset('home/images/m3.jpg')}}" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="single.html" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
						<span class="product-new-top">New</span>

					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">Dark Blue Track Pants</a></h4>
						<div class="info-product-price">
							<span class="item_price">$80.99</span>
							<del>$89.71</del>
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Dark Blue Track Pants" />
									<input type="hidden" name="amount" value="30.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="{{asset('home/images/m4.jpg')}}" alt="" class="pro-image-front">
						<img src="{{asset('home/images/m4.jpg')}}" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="single.html" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
						<span class="product-new-top">New</span>

					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">Round Neck Black T-Shirt</a></h4>
						<div class="info-product-price">
							<span class="item_price">$190.99</span>
							<del>$159.71</del>
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Black T-Shirt" />
									<input type="hidden" name="amount" value="30.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="{{asset('home/images/m5.jpg')}}" alt="" class="pro-image-front">
						<img src="{{asset('home/images/m5.jpg')}}" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="single.html" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
						<span class="product-new-top">New</span>

					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">Men's Black Jeans</a></h4>
						<div class="info-product-price">
							<span class="item_price">$60.99</span>
							<del>$90.71</del>
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Men's Black Jeans" />
									<input type="hidden" name="amount" value="30.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="{{asset('home/images/m7.jpg')}}" alt="" class="pro-image-front">
						<img src="{{asset('home/images/m7.jpg')}}" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="single.html" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
						<span class="product-new-top">New</span>

					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">Analog Watch</a></h4>
						<div class="info-product-price">
							<span class="item_price">$160.99</span>
							<del>$290.71</del>
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Analog Watch" />
									<input type="hidden" name="amount" value="30.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="{{asset('home/images/m6.jpg')}}" alt="" class="pro-image-front">
						<img src="{{asset('home/images/m6.jpg')}}" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="single.html" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
						<span class="product-new-top">New</span>

					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">Reversible Belt</a></h4>
						<div class="info-product-price">
							<span class="item_price">$30.99</span>
							<del>$50.71</del>
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Reversible Belt" />
									<input type="hidden" name="amount" value="30.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="{{asset('home/images/m8.jpg')}}" alt="" class="pro-image-front">
						<img src="{{asset('home/images/m8.jpg')}}" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="single.html" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
						<span class="product-new-top">New</span>

					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">Party Men's Blazer</a></h4>
						<div class="info-product-price">
							<span class="item_price">$260.99</span>
							<del>$390.71</del>
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Party Men's Blazer" />
									<input type="hidden" name="amount" value="30.99" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>	
<!-- //mens -->
<!--/grids-->
<div class="coupons">
	<div class="coupons-grids text-center">
		<div class="w3layouts_mail_grid">
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>FREE SHIPPING</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-headphones" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>24/7 SUPPORT</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>MONEY BACK GUARANTEE</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-gift" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>FREE GIFT COUPONS</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
<!--grids-->
@endsection
@section('script')
<!-- js -->
<script type="text/javascript" src="{{asset('home/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{asset('home/js/responsiveslides.min.js')}}"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
<script src="{{asset('home/js/modernizr.custom.js')}}"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="{{asset('home/js/minicart.min.js')}}"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
	<!---->
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 50000000,
										values: [ 10000, 10000000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ]);
										}
							 });
							$( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + " - " + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
						<script type="text/javascript" src="{{asset('home/js/jquery-ui.js')}}"></script>
					 <!---->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('home/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('home/js/bootstrap.js')}}"></script>
@endsection