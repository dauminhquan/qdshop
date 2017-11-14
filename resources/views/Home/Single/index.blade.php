@extends('home.layouts.home')
@section('css')
<link rel="stylesheet" href="{{asset("home/css/flexslider.css")}}" type="text/css" media="screen">
@endsection
@section('content')
<!--/single_page-->
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
	<div class="container">
		<h3>Single <span>Page </span></h3>
		<!--/w3_short-->
		<div class="services-breadcrumb">
			<div class="agile_inner_breadcrumb">

				<ul class="w3_short">
					<li><a href="index.html">Home</a><i>|</i></li>
					<li>Sản phẩm</li>
				</ul>
			</div>
		</div>
		<!--//w3_short-->
	</div>
</div>

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<div class="">
			<div class="col-md-12 men-pro-item simpleCart_shelfItem">
				<div class="row product-single">
					<div class="col-md-4 single-right-left ">
						<div class="grid images_3_of_2">
							<div class="flexslider">

								<ul class="slides">
									<li data-thumb="{{asset("home/images/d2.jpg")}}">
										<div class="thumb-image"> <img src="{{asset("home/images/d2.jpg")}}" data-imagezoom="true" class="img-responsive"> </div>
									</li>
									<li data-thumb="{{asset("home/images/d1.jpg")}}">
										<div class="thumb-image"> <img src="{{asset("home/images/d1.jpg")}}" data-imagezoom="true" class="img-responsive"> </div>
									</li>	
									<li data-thumb="{{asset("home/images/d3.jpg")}}">
										<div class="thumb-image"> <img src="{{asset("home/images/d3.jpg")}}" data-imagezoom="true" class="img-responsive"> </div>
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>	
						</div>
					</div>
					<div class="col-md-8 single-right-left simpleCart_shelfItem">
						<h3>Big Wing Sneakers  (Navy)</h3>
						<p><span class="item_price">$650</span> <del>- $900</del></p>
						<div class="rating1">
							<span class="starRating">
								<input id="rating5" type="radio" name="rating" value="5">
								<label for="rating5">5</label>
								<input id="rating4" type="radio" name="rating" value="4">
								<label for="rating4">4</label>
								<input id="rating3" type="radio" name="rating" value="3" checked="">
								<label for="rating3">3</label>
								<input id="rating2" type="radio" name="rating" value="2">
								<label for="rating2">2</label>
								<input id="rating1" type="radio" name="rating" value="1">
								<label for="rating1">1</label>
							</span>
						</div>
						<div class="description">
							<h5>Nhập mã giảm giá</h5>
							<form action="#" method="post">
								<input type="text" value="Mã giảm giá" onfocus="this.value = '';" onblur="if (this.value == '') {
									this.value = 'Mã giảm giá';
								}" required="">
								<input type="submit" value="Check">
							</form>
						</div>
						<div class="color-quality">
							<div class="color-quality-right">
								<h5>Số lượng sản phẩm :</h5>
								<input type="number" name="" value="" placeholder="" class="form-control">
							</div>
						</div>
						<div class="occasional">
							<h5>Kiểu sản phẩm :</h5>
							<div class="colr ert">
								<label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
							</div>
							<div class="colr">
								<label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>
							</div>
							<div class="colr">
								<label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="occasion-cart">
							<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
								<form action="#" method="post">
									<fieldset>
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="business" value=" ">
										<input type="hidden" name="item_name" value="Wing Sneakers">
										<input type="hidden" name="amount" value="650.00">
										<input type="hidden" name="discount_amount" value="1.00">
										<input type="hidden" name="currency_code" value="USD">
										<input type="hidden" name="return" value=" ">
										<input type="hidden" name="cancel_return" value=" ">
										<input type="submit" name="submit" value="Mua" class="button">
									</fieldset>
								</form>
							</div>

						</div>
						<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
							<li class="share">Chia sẻ : </li>
							<li><a href="#" class="facebook">
								<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>

							</li>
							<li><a href="#" class="twitter"> 
								<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="instagram">
									<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
									<li><a href="#" class="pinterest">
										<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
									</ul>

								</div>
								<div class="clearfix"> </div>
								<!-- /new_arrivals --> 
								<div class="responsive_tabs_agileits"> 
									<div id="horizontalTab">
										<ul class="resp-tabs-list infor-product">
											<li>Giới thiệu</li>

											<li>Thông tin về sản phẩm</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">

												<div class="single_page_agile_its_w3ls">
													<h6>Lorem ipsum dolor sit amet</h6>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
													<p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
												</div>
											</div>

											<div class="tab3">

												<div class="single_page_agile_its_w3ls">
													<h6>Big Wing Sneakers (Navy)</h6>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
													<p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
												</div>
											</div>
										</div>
									</div>	
								</div>
								<!-- //new_arrivals --> 
								<!--/slider_owl-->


							</div>
						</div>
						
					</div>

				</div>

			</div>
			<div class="container men-pro-item simpleCart_shelfItemproduct-single-right more-product">
				<div class="more-product-head">
					<p>Sản phẩm bán chạy:</p>
				</div>
				<div class="single-pro">
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m1.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m1.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Formal Blue Shirt">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m2.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m2.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Sweatshirt">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m3.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m3.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Dark Blue Track Pants">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m4.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m4.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Black T-Shirt">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m5.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m5.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Men's Black Jeans">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m7.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m7.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Analog Watch">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m6.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m6.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Reversible Belt">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m8.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m8.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Party Men's Blazer">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

				<div class="clearfix"> </div>
				<div class="more-product-head">
					<p>Sản phẩm tương tự:</p>
				</div>
				<div class="single-pro">
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m1.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m1.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Formal Blue Shirt">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m2.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m2.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Sweatshirt">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m3.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m3.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Dark Blue Track Pants">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m4.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m4.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Black T-Shirt">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m5.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m5.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Men's Black Jeans">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m7.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m7.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Analog Watch">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m6.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m6.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Reversible Belt">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="http://localhost/shop/public/home/images/m8.jpg" alt="" class="pro-image-front">
						<img src="http://localhost/shop/public/home/images/m8.jpg" alt="" class="pro-image-back">
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
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="Party Men's Blazer">
									<input type="hidden" name="amount" value="30.99">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

				<div class="clearfix"> </div>
				<!--//slider_owl-->
			</div>
			<div class="container men-pro-item simpleCart_shelfItemproduct-single-right coment-assess">
				<div class="more-product-head">
					<p>Đánh giá sản phẩm</p>
					<span class="btn btn-default">Đánh giá sản phẩm</span>
				</div>
				<div class="comment-assess-content">
					<form action="" class="form">
						<div class="form-group">
							
							<textarea name="" class="form-control" rows="5" cols="50" placeholder="Nhập bình luận của bạn"></textarea>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--//single_page-->
		@endsection
		@section('script')
		<script type="text/javascript" src="{{asset("home/js/jquery-2.1.4.min.js")}}"></script>
		<!-- //js -->
		<script src="{{asset("home/js/modernizr.custom.js")}}"></script>
		<!-- Custom-JavaScript-File-Links --> 
		<!-- cart-js -->
		<script src="{{asset("home/js/minicart.min.js")}}"></script>
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
<!-- single -->
<script src="{{asset("home/js/imagezoom.js")}}"></script>
<!-- single -->
<!-- script for responsive tabs -->						
<script src="{{asset("home/js/easy-responsive-tabs.js")}}"></script>
<script>
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
                                            type: 'default', //Types: default, vertical, accordion           
                                            width: 'auto', //auto or any width like 600px
                                            fit: true, // 100% fit in a container
                                            closed: 'accordion', // Start closed if in accordion view
                                            activate: function (event) { // Callback function if tab is switched
                                            	var $tab = $(this);
                                            	var $info = $('#tabInfo');
                                            	var $name = $('span', $info);
                                            	$name.text($tab.text());
                                            	$info.show();
                                            }
                                        });
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>
<!-- FlexSlider -->
<script src="{{asset("home/js/jquery.flexslider.js")}}"></script>
<script>
                                    // Can also be used with $(document).ready()
                                    $(window).load(function () {
                                    	$('.flexslider').flexslider({
                                    		animation: "slide",
                                    		controlNav: "thumbnails"
                                    	});
                                    });
                                </script>
                                <!-- //FlexSlider-->
                                <!-- //script for responsive tabs -->		
                                <!-- start-smoth-scrolling -->
                                <script type="text/javascript" src="{{asset("home/js/move-top.js")}}"></script>
                                <script type="text/javascript" src="{{asset("home/js/jquery.easing.min.js")}}"></script>
                                <script type="text/javascript">
                                	jQuery(document).ready(function ($) {
                                		$(".scroll").click(function (event) {
                                			event.preventDefault();
                                			$('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                                		});
                                	});
                                </script>
                                <!-- here stars scrolling icon -->
                                <script type="text/javascript">
                                	$(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */

         $().UItoTop({easingType: 'easeOutQuart'});

     });
 </script>
 <!-- //here ends scrolling icon -->

 <!-- for bootstrap working -->
 <script type="text/javascript" src="{{asset("home/js/bootstrap.js")}}"></script>
 <script type="text/javascript" src="{{asset("home/js/config.js")}}"></script>
 @endsection