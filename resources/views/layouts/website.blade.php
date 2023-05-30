<!DOCTYPE html>
<html lang="en">
	@php
	   $basic=App\Models\Basic::where('basic_status',1)->where('basic_id',1)->firstOrFail();
	   $contactInfo=App\Models\ContactInformation::where('cont_status',1)->where('cont_id',1)->firstOrFail();
	   $social=App\Models\SocialMedia::where('sm_status',1)->where('sm_id',1)->firstOrFail();
	@endphp
	<head>
		<title>{{$basic->basic_title}}</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="OneTech shop project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/bootstrap4/bootstrap.min.css">
		<link href="{{asset('contents/website')}}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/plugins/slick-1.8.0/slick.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/blog_single_styles.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/blog_single_responsive.css">

	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/blog_styles.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/blog_responsive.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/cart_styles.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/cart_responsive.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/product_styles.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/product_responsive.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/regular_styles.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/regular_responsive.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/shop_styles.css">
		<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/shop_responsive.css">

<div class="super_container">
	<header class="header">
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('contents/website')}}/images/phone.png" alt=""></div>+88{{$contactInfo->cont_phone1}}</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('contents/website')}}/images/mail.png" alt=""></div>{{$contactInfo->cont_email1}}</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="#">English<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Italian</a></li>
											<li><a href="#">Spanish</a></li>
											<li><a href="#">Japanese</a></li>
										</ul>
									</li>
									<li>
										<a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">EUR Euro</a></li>
											<li><a href="#">GBP British Pound</a></li>
											<li><a href="#">JPY Japanese Yen</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="top_bar_user">
								<div class="user_icon"><img src="{{asset('contents/website')}}/images/user.svg" alt=""></div>
								<div><a href="#">Register</a></div>
								<div><a href="{{ route('login') }}">Sign in</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_main">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">{{$basic->basic_subtitle}}</a></div>
						</div>
					</div>
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('contents/website')}}/images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="{{asset('contents/website')}}/images/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Wishlist</a></div>
									<div class="wishlist_count">115</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="{{asset('contents/website')}}/images/cart.png" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Cart</a></div>
										<div class="cart_price">$85</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
									<li><a href="#">Computers & Laptops <i class="fas fa-chevron-right ml-auto"></i></a></li>
									<li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
									<li class="hassubs">
										<a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li><a href="#">Smartphones & Tablets<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Gadgets<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Car Electronics<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Video Games & Consoles<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="{{url('/shop')}}">Shop<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{url('/product')}}">Product<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{url('/blog')}}">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{url('/blog-post')}}">Blog Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Regular Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{url('/cart')}}">Cart<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{url('/contact')}}">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="{{url('/blog')}}">Blog<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="{{url('/contact')}}">Contact<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>

		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="page_menu_content">

							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>

							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('contents/website')}}/images/phone_white.png" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('contents/website')}}/images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>


	@yield('content')


	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="{{asset('contents/website')}}/images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">OneTech</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+88{{$contactInfo->cont_phone1}}</div>
						<div class="footer_phone">+88{{$contactInfo->cont_phone2}}</div>
						<div class="footer_contact_text">
							<p>{{$contactInfo->cont_add1}}</p>
							<p>{{$contactInfo->cont_add2}}</p>
						</div>
						<div class="footer_social">
							<ul>
								@if($social->sm_facebook!='')
								<li><a target="_blank" rel="nofollow" href="{{$social->sm_facebook}}"><i class="fab fa-facebook-f"></i></a></li>
								@endif
								@if($social->sm_twitter!='')
								<li><a target="_blank" rel="nofollow" href="{{$social->sm_twitter}}"><i class="fab fa-twitter"></i></a></li>
								@endif
								@if($social->sm_youtube!='')
								<li><a target="_blank" rel="nofollow" href="{{$social->sm_youtube}}"><i class="fab fa-youtube"></i></a></li>
								@endif
								@if($social->sm_google!='')
								<li><a target="_blank" rel="nofollow" href="{{$social->sm_google}}"><i class="fab fa-google"></i></a></li>
								@endif
								@if($social->sm_linkedin!='')
								<li><a target="_blank" rel="nofollow" href="{{$social->sm_linkedin}}"><i class="fab fa-linkedin"></i></a></li>
								@endif
								@if($social->sm_instagram!='')
								<li><a target="_blank" rel="nofollow" href="{{$social->sm_instagram}}"><i class="fab fa-instagram"></i></a></li>
								@endif
								@if($social->sm_pinterest!='')
								<li><a target="_blank" rel="nofollow" href="{{$social->sm_pinterest}}"><i class="fab fa-pinterest"></i></a></li>
								@endif
								@if($social->sm_skype!='')
								<li><a target="_blank" rel="nofollow" href="{{$social->sm_skype}}"><i class="fab fa-skype"></i></a></li>
								@endif
								@if($social->sm_behance!='')
								<li><a target="_blank" rel="nofollow" href="{{$social->sm_behance}}"><i class="fab fa-behance"></i></a></li>
								@endif
								@if($social->sm_dribbble!='')
								<li><a target="_blank" rel="nofollow" href="{{$social->sm_dribbble}}"><i class="fab fa-dribbble"></i></a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
						</ul>

						
						<ul class="footer_list">
							<li><a href="#">Gadgets</a></li>
							<li><a href="#">Car Electronics</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="{{asset('contents/website')}}/images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="{{asset('contents/website')}}/images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="{{asset('contents/website')}}/images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="{{asset('contents/website')}}/images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="{{asset('contents/website')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('contents/website')}}{{asset('contents/website')}}{{asset('contents/website')}}/styles/bootstrap4/popper.js"></script>
<script src="{{asset('contents/website')}}{{asset('contents/website')}}{{asset('contents/')}}{{asset('contents/')}}{{asset('contents/website')}}{{asset('contents/website')}}{{asset('contents/website')}}/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{asset('contents/website')}}/plugins/slick-1.8.0/slick.js"></script>
<script src="{{asset('contents/website')}}/plugins/easing/easing.js"></script>
<script src="{{asset('contents/website')}}/js/custom.js"></script>
<script src="{{asset('contents/website')}}/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{asset('contents/website')}}/js/shop_custom.js"></script>
</body>

</html>
