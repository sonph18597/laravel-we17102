<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/kumo-demo-2/kumo/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Nov 2022 17:39:20 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kumo- Fashion eCommerce HTML Template</title>

    <!-- Custom CSS -->
    <link href="../../client/css/styles.css" rel="stylesheet">

</head>

<body>

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader"></div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-transparent dark-text">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="#">
                        <img src="../../client/img/logo.png" class="logo" alt="" />
                    </a>
                    <div class="nav-toggle"></div>
                    <div class="mobile_nav">
                        <ul>
                            <li>
                                <a href="#" onclick="openSearch()">
                                    <i class="lni lni-search-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#login">
                                    <i class="lni lni-user"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="openWishlist()">
                                    <i class="lni lni-heart"></i><span class="dn-counter">2</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">

                        <li><a href="{{route('home')}}">Home</a>

                        </li>

                        <li><a href="javascript:void(0);">Shop</a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="javascript:void(0);">Account Dashboard</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="my-orders.html">My Order</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="profile-info.html">Profile Info</a></li>
                                        <li><a href="addresses.html">Addresses</a></li>
                                        <li><a href="payment-methode.html">Payment Methode</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);">Support</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="shoping-cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="complete-order.html">Order Complete</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-style-1.html">Shop Style 01</a></li>
                                <li><a href="shop-style-2.html">Shop Style 02</a></li>
                                <li><a href="shop-style-3.html">Shop Style 03</a></li>
                                <li><a href="shop-style-4.html">Shop Style 04</a></li>
                                <li><a href="shop-style-5.html">Shop Style 05</a></li>
                                <li><a href="shop-list-view.html">Shop List Style</a></li>
                            </ul>
                        </li>

                        <li><a href="javascript:void(0);">Product</a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="shop-single-v1.html">Product Detail v01</a></li>
                                <li><a href="shop-single-v2.html">Product Detail v02</a></li>
                                <li><a href="shop-single-v3.html">Product Detail v03</a></li>
                                <li><a href="shop-single-v4.html">Product Detail v04</a></li>
                            </ul>
                        </li>

                        <li><a href="javascript:void(0);">Pages</a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="blog.html">Blog Style</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                            </ul>
                        </li>

                        <li><a href="docs.html">Docs</a></li>

                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li>
                            <a href="#" onclick="openSearch()">
                                <i class="lni lni-search-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#login">
                                <i class="lni lni-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="openWishlist()">
                                <i class="lni lni-heart"></i><span class="dn-counter">2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="openCart()">
                                <i class="lni lni-shopping-basket"></i><span class="dn-counter">3</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Hero Banner  Start================================== -->
    <div class="home-slider margin-bottom-0">
        <!-- Slide -->
        <div data-background-image="../../client/img/banner-2.png" class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home-slider-container">

                            <!-- Slide Title -->
                            <div class="home-slider-desc">
                                <div class="home-slider-title mb-4">
                                    <h5 class="theme-cl fs-sm ft-ragular mb-0">Winter Collection</h5>
                                    <h1 class="mb-1 ft-bold lg-heading">New Winter<br>Collections 2021</h1>
                                    <span class="trending">There's nothing like trend</span>
                                </div>

                                <a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
                            </div>
                            <!-- Slide Title / End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div data-background-image="../../client/img/banner-5.png" class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home-slider-container">

                            <!-- Slide Title -->
                            <div class="home-slider-desc">
                                <div class="home-slider-title mb-4">
                                    <h5 class="theme-cl fs-sm ft-ragular mb-0">Winter Collection</h5>
                                    <h1 class="mb-1 ft-bold lg-heading">New Winter<br>Collections 2021</h1>
                                    <span class="trending">There's nothing like trend</span>
                                </div>

                                <a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
                            </div>
                            <!-- Slide Title / End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div data-background-image="../../client/img/banner-3.png" class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home-slider-container">

                            <!-- Slide Title -->
                            <div class="home-slider-desc">
                                <div class="home-slider-title mb-4">
                                    <h5 class="theme-cl fs-sm ft-ragular mb-0">Winter Collection</h5>
                                    <h1 class="mb-1 ft-bold lg-heading">New Winter<br>Collections 2021</h1>
                                    <span class="trending">There's nothing like trend</span>
                                </div>

                                <a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
                            </div>
                            <!-- Slide Title / End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ========================= Category Style ========================== -->
    <section class="middle">
        <div class="container">
            <div class="row no-gutters exlio_gutters">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="single_cats">
                        <a href="#" class="cards card-overflow card-scale lg_height">
                            <div class="bg-image" style="background:url(../../client/img/b-8.png)no-repeat;"></div>
                            <div class="ct_body">
                                <div class="ct_body_caption left">
                                    <h2 class="m-0 ft-bold lh-1 fs-md text-upper">Women Clothes</h2>
                                    <span>3272 Items</span>
                                </div>
                                <div class="ct_footer left">
                                    <span class="stretched-link fs-md">Browse Items <i class="ti-arrow-circle-right"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="single_cats">
                        <a href="#" class="cards card-overflow card-scale md_height">
                            <div class="bg-image" style="background:url(../../client/img/b-5.png)no-repeat;"></div>
                            <div class="ct_body">
                                <div class="ct_body_caption left">
                                    <h2 class="m-0 ft-bold lh-1 fs-md text-upper">Men's Wear</h2>
                                    <span>7632 Items</span>
                                </div>
                                <div class="ct_footer left">
                                    <span class="stretched-link fs-md">Browse Items <i class="ti-arrow-circle-right"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <!-- row -->
                    <div class="row no-gutters">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="single_cats">
                                <a href="#" class="cards card-overflow card-scale md_height">
                                    <div class="bg-image" style="background:url(../../client/img/b-3.png)no-repeat;"></div>
                                    <div class="ct_body">
                                        <div class="ct_body_caption left">
                                            <h2 class="m-0 ft-bold lh-1 fs-md text-upper">Kid's Wear</h2>
                                            <span>4072 Items</span>
                                        </div>
                                        <div class="ct_footer left">
                                            <span class="stretched-link fs-md">Browse Items <i class="ti-arrow-circle-right"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single_cats">
                                <a href="#" class="cards card-overflow card-scale lg_height">
                                    <div class="bg-image" style="background:url(../../client/img/b-7.png)no-repeat;"></div>
                                    <div class="ct_body">
                                        <div class="ct_body_caption left">
                                            <h2 class="m-0 ft-bold lh-1 fs-md text-upper">Men's Jackets</h2>
                                            <span>9652 Items</span>
                                        </div>
                                        <div class="ct_footer left">
                                            <span class="stretched-link fs-md">Browse Items <i class="ti-arrow-circle-right"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- /row -->

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Category Style =============================== -->

    <!-- ======================= Products Lists ======================== -->
    @yield('home-product')
    <!-- ======================= Products List ======================== -->

    <!-- ======================= Customer Review ======================== -->
    <section class="gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Testimonials</h2>
                        <h3 class="ft-bold pt-3">Client Reviews</h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
                    <div class="reviews-slide px-3">

                        <!-- single review -->
                        <div class="single_review">
                            <div class="sng_rev_thumb"><figure><img src="../../client/img/team-1.jpg" class="img-fluid circle" alt="" /></figure></div>
                            <div class="sng_rev_caption text-center">
                                <div class="rev_desc mb-4">
                                    <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                </div>
                                <div class="rev_author">
                                    <h4 class="mb-0">Mark Jevenue</h4>
                                    <span class="fs-sm">CEO of Addle</span>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review">
                            <div class="sng_rev_thumb"><figure><img src="../../client/img/team-2.jpg" class="img-fluid circle" alt="" /></figure></div>
                            <div class="sng_rev_caption text-center">
                                <div class="rev_desc mb-4">
                                    <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                </div>
                                <div class="rev_author">
                                    <h4 class="mb-0">Henna Bajaj</h4>
                                    <span class="fs-sm">Aqua Founder</span>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review">
                            <div class="sng_rev_thumb"><figure><img src="../../client/img/team-3.jpg" class="img-fluid circle" alt="" /></figure></div>
                            <div class="sng_rev_caption text-center">
                                <div class="rev_desc mb-4">
                                    <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                </div>
                                <div class="rev_author">
                                    <h4 class="mb-0">John Cenna</h4>
                                    <span class="fs-sm">CEO of Plike</span>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review">
                            <div class="sng_rev_thumb"><figure><img src="../../client/img/team-4.jpg" class="img-fluid circle" alt="" /></figure></div>
                            <div class="sng_rev_caption text-center">
                                <div class="rev_desc mb-4">
                                    <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                </div>
                                <div class="rev_author">
                                    <h4 class="mb-0">Madhu Sharma</h4>
                                    <span class="fs-sm">Team Manager</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Customer Review ======================== -->

    <!-- ======================= Blog Start ============================ -->
    <section class="space min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Latest News</h2>
                        <h3 class="ft-bold pt-3">New Updates</h3>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="_blog_wrap">
                        <div class="_blog_thumb mb-2">
                            <a href="blog-detail.html" class="d-block"><img src="../../client/img/bl-1.png" class="img-fluid rounded" alt="" /></a>
                        </div>
                        <div class="_blog_caption">
                            <span class="text-muted">26 Jan 2021</span>
                            <h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                            <a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="_blog_wrap">
                        <div class="_blog_thumb mb-2">
                            <a href="blog-detail.html" class="d-block"><img src="../../client/img/bl-2.png" class="img-fluid rounded" alt="" /></a>
                        </div>
                        <div class="_blog_caption">
                            <span class="text-muted">17 July 2021</span>
                            <h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                            <a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="_blog_wrap">
                        <div class="_blog_thumb mb-2">
                            <a href="blog-detail.html" class="d-block"><img src="../../client/img/bl-3.png" class="img-fluid rounded" alt="" /></a>
                        </div>
                        <div class="_blog_caption">
                            <span class="text-muted">10 Aug 2021</span>
                            <h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                            <a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Blog Start ============================ -->

    <!-- ======================= Instagram Start ============================ -->
    <section class="p-0">
        <div class="container-fluid p-0">

            <div class="row no-gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Instagram Gallery</h2>
                        <span class="fs-lg ft-bold theme-cl pt-3">@mahak_71</span>
                        <h3 class="ft-bold lh-1">From Instagram</h3>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">

                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="../../client/img/i-1.png" class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="../../client/img/i-2.png" class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="../../client/img/i-3.png" class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="../../client/img/i-7.png" class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="../../client/img/i-8.png" class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="../../client/img/i-4.png" class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="../../client/img/i-5.png" class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img src="../../client/img/i-6.png" class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Instagram Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="light-footer">
        <div class="footer-middle">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <div class="footer_widget">
                            <img src="../../client/img/logo.png" class="img-footer small mb-2" alt="" />

                            <div class="address mt-3">
                                3298 Grant Street Longview, TX<br>United Kingdom 75601
                            </div>
                            <div class="address mt-3">
                                1-202-555-0106<br>help@shopper.com
                            </div>
                            <div class="address mt-3">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="lni lni-youtube"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">Supports</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">About Page</a></li>
                                <li><a href="#">Size Guide</a></li>
                                <li><a href="#">Shipping & Returns</a></li>
                                <li><a href="#">FAQ's Page</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">Shop</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Men's Shopping</a></li>
                                <li><a href="#">Women's Shopping</a></li>
                                <li><a href="#">Kids's Shopping</a></li>
                                <li><a href="#">Furniture</a></li>
                                <li><a href="#">Discounts</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">Company</h4>
                            <ul class="footer-menu">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">Subscribe</h4>
                            <p>Receive updates, hot deals, discounts sent straignt in your inbox daily</p>
                            <div class="foot-news-last">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <div class="input-group-append">
                                        <button type="button" class="input-group-text bg-dark b-0 text-light"><i class="lni lni-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="address mt-3">
                                <h5 class="fs-sm">Secure Payments</h5>
                                <div class="scr_payment"><img src="../../client/img/card.png" class="img-fluid" alt="" /></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mb-0">© 2021 Kumo. Designd By <a href="https://themezhub.com/">ThemezHub</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <!-- Product View Modal -->
    <div class="modal fade lg-modal" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickviewmodal" aria-hidden="true">
        <div class="modal-dialog modal-xl login-pop-form" role="document">
            <div class="modal-content" id="quickviewmodal">
                <div class="modal-headers">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ti-close"></span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="quick_view_wrap">

                        <div class="quick_view_thmb">
                            <div class="quick_view_slide">
                                <div class="single_view_slide"><img src="../../client/img/product/1.jpg" class="img-fluid" alt="" /></div>
                                <div class="single_view_slide"><img src="../../client/img/product/2.jpg" class="img-fluid" alt="" /></div>
                                <div class="single_view_slide"><img src="../../client/img/product/3.jpg" class="img-fluid" alt="" /></div>
                                <div class="single_view_slide"><img src="../../client/img/product/4.jpg" class="img-fluid" alt="" /></div>
                            </div>
                        </div>

                        <div class="quick_view_capt">
                            <div class="prd_details">

                                <div class="prt_01 mb-1"><span class="text-light bg-info rounded px-2 py-1">Dresses</span></div>
                                <div class="prt_02 mb-2">
                                    <h2 class="ft-bold mb-1">Women Striped Shirt Dress</h2>
                                    <div class="text-left">
                                        <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="small">(412 Reviews)</span>
                                        </div>
                                        <div class="elis_rty"><span class="ft-medium text-muted line-through fs-md mr-2">$199</span><span class="ft-bold theme-cl fs-lg mr-2">$110</span><span class="ft-regular text-danger bg-light-danger py-1 px-2 fs-sm">Out of Stock</span></div>
                                    </div>
                                </div>

                                <div class="prt_03 mb-3">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                                </div>

                                <div class="prt_04 mb-2">
                                    <p class="d-flex align-items-center mb-0 text-dark ft-medium">Color:</p>
                                    <div class="text-left">
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8" id="white8">
                                            <label class="form-option-label rounded-circle" for="white8"><span class="form-option-color rounded-circle blc7"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8" id="blue8">
                                            <label class="form-option-label rounded-circle" for="blue8"><span class="form-option-color rounded-circle blc2"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8" id="yellow8">
                                            <label class="form-option-label rounded-circle" for="yellow8"><span class="form-option-color rounded-circle blc5"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8" id="pink8">
                                            <label class="form-option-label rounded-circle" for="pink8"><span class="form-option-color rounded-circle blc3"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8" id="red">
                                            <label class="form-option-label rounded-circle" for="red"><span class="form-option-color rounded-circle blc4"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" name="color8" id="green">
                                            <label class="form-option-label rounded-circle" for="green"><span class="form-option-color rounded-circle blc6"></span></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="prt_04 mb-4">
                                    <p class="d-flex align-items-center mb-0 text-dark ft-medium">Size:</p>
                                    <div class="text-left pb-0 pt-2">
                                        <div class="form-check size-option form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size" id="28" checked="">
                                            <label class="form-option-label" for="28">28</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size" id="30">
                                            <label class="form-option-label" for="30">30</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size" id="32">
                                            <label class="form-option-label" for="32">32</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size" id="34">
                                            <label class="form-option-label" for="34">34</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size" id="36">
                                            <label class="form-option-label" for="36">36</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size" id="38">
                                            <label class="form-option-label" for="38">38</label>
                                        </div>
                                        <div class="form-check form-option size-option  form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size" id="40">
                                            <label class="form-option-label" for="40">40</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="prt_05 mb-4">
                                    <div class="form-row mb-7">
                                        <div class="col-12 col-lg-auto">
                                            <!-- Quantity -->
                                            <select class="mb-2 custom-select">
                                                <option value="1" selected="">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg">
                                            <!-- Submit -->
                                            <button type="submit" class="btn btn-block custom-height bg-dark mb-2">
                                                <i class="lni lni-shopping-basket mr-2"></i>Add to Cart
                                            </button>
                                        </div>
                                        <div class="col-12 col-lg-auto">
                                            <!-- Wishlist -->
                                            <button class="btn custom-height btn-default btn-block mb-2 text-dark" data-toggle="button">
                                                <i class="lni lni-heart mr-2"></i>Wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="prt_06">
                                    <p class="mb-0 d-flex align-items-center">
                                        <span class="mr-4">Share:</span>
                                        <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
                                            <i class="fab fa-twitter position-absolute"></i>
                                        </a>
                                        <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
                                            <i class="fab fa-facebook-f position-absolute"></i>
                                        </a>
                                        <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted" href="#!">
                                            <i class="fab fa-pinterest-p position-absolute"></i>
                                        </a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
        <div class="modal-dialog modal-xl login-pop-form" role="document">
            <div class="modal-content" id="loginmodal">
                <div class="modal-headers">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ti-close"></span>
                    </button>
                </div>

                <div class="modal-body p-5">
                    <div class="text-center mb-4">
                        <h2 class="m-0 ft-regular">Login</h2>
                    </div>

                    <form>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="Username*">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password*">
                        </div>

                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-1">
                                    <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                    <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                </div>
                                <div class="eltio_k2">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Login</button>
                        </div>

                        <div class="form-group text-center mb-0">
                            <p class="extra">Not a member?<a href="#et-register-wrap" class="text-dark"> Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Search -->
    <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Search">
        <div class="rightMenu-scroll">
            <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                <h4 class="cart_heading fs-md ft-medium mb-0">Search Products</h4>
                <button onclick="closeSearch()" class="close_slide"><i class="ti-close"></i></button>
            </div>

            <div class="cart_action px-3 py-4">
                <form class="form m-0 p-0">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Product Keyword.." />
                    </div>

                    <div class="form-group">
                        <select class="custom-select">
                            <option value="1" selected="">Choose Category</option>
                            <option value="2">Men's Store</option>
                            <option value="3">Women's Store</option>
                            <option value="4">Kid's Fashion</option>
                            <option value="5">Inner Wear</option>
                        </select>
                    </div>

                    <div class="form-group mb-0">
                        <button type="button" class="btn d-block full-width btn-dark">Search Product</button>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center justify-content-center br-top br-bottom py-2 px-3">
                <h4 class="cart_heading fs-md mb-0">Hot Categories</h4>
            </div>

            <div class="cart_action px-3 py-3">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="../../client/img/tshirt.png" class="img-fluid" width="40" alt="" /></a></div></div>
                            <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">T-Shirts</a></h6></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="../../client/img/pant.png" class="img-fluid" width="40" alt="" /></a></div></div>
                            <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Pants</a></h6></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="../../client/img/fashion.png" class="img-fluid" width="40" alt="" /></a></div></div>
                            <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Women's</a></h6></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="../../client/img/sneakers.png" class="img-fluid" width="40" alt="" /></a></div></div>
                            <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Shoes</a></h6></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="../../client/img/television.png" class="img-fluid" width="40" alt="" /></a></div></div>
                            <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Television</a></h6></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
                        <div class="cats_side_wrap text-center">
                            <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="../../client/img/accessories.png" class="img-fluid" width="40" alt="" /></a></div></div>
                            <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Accessories</a></h6></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Wishlist -->
    <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Wishlist">
        <div class="rightMenu-scroll">
            <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                <h4 class="cart_heading fs-md ft-medium mb-0">Saved Products</h4>
                <button onclick="closeWishlist()" class="close_slide"><i class="ti-close"></i></button>
            </div>
            <div class="right-ch-sideBar">
                
            </div>
        </div>
    </div>

    <!-- Cart -->
    
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../../client/js/jquery.min.js"></script>
<script src="../../client/js/popper.min.js"></script>
<script src="../../client/js/bootstrap.min.js"></script>
<script src="../../client/js/ion.rangeSlider.min.js"></script>
<script src="../../client/js/slick.js"></script>
<script src="../../client/js/slider-bg.js"></script>
<script src="../../client/js/lightbox.js"></script>
<script src="../../client/js/smoothproducts.js"></script>
<script src="../../client/js/snackbar.min.js"></script>
<script src="../../client/js/jQuery.style.switcher.js"></script>
<script src="../../client/js/custom.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

<script>
    function openWishlist() {
        document.getElementById("Wishlist").style.display = "block";
    }
    function closeWishlist() {
        document.getElementById("Wishlist").style.display = "none";
    }
</script>

<script>
    function openCart() {
        document.getElementById("Cart").style.display = "block";
    }
    function closeCart() {
        document.getElementById("Cart").style.display = "none";
    }
</script>

<script>
    function openSearch() {
        document.getElementById("Search").style.display = "block";
    }
    function closeSearch() {
        document.getElementById("Search").style.display = "none";
    }
</script>
<script>
    function AddCart(id) {
        $.ajax({
            url : '/addToCart/'+id,
            type:'GET',
        }).done(function(reponse){
            $('.cart_select_items').empty();
            $('.cart_select_items').html(reponse);
        } )
    }
</script>
</body>

<!-- Mirrored from themezhub.net/kumo-demo-2/kumo/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Nov 2022 17:39:23 GMT -->
</html>
