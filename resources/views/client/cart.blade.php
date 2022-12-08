<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/kumo-demo-2/kumo/shoping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Nov 2022 17:39:41 GMT -->
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
    <div class="py-2 bg-dark">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 hide-ipad">
                    <div class="top_first"><a href="callto:(+84)0123456789" class="medium text-light">(+84) 0123 456 789</a></div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 hide-ipad">
                    <div class="top_second text-center"><p class="medium text-light m-0 p-0">Get Free delivery from $2000 <a href="#" class="medium text-light text-underline">Shop Now</a></p></div>
                </div>

                <!-- Right Menu -->
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12">

                    <div class="currency-selector dropdown js-dropdown float-right">
                        <a href="javascript:void(0);" data-toggle="dropdown" class="popup-title"  title="Currency" aria-label="Currency dropdown">
                            <span class="hidden-xl-down medium text-light">Currency:</span>
                            <span class="iso_code medium text-light">$USD</span>
                            <i class="fa fa-angle-down medium text-light"></i>
                        </a>
                        <ul class="popup-content dropdown-menu">
                            <li><a title="Euro" href="#" class="dropdown-item medium text-medium">EUR €</a></li>
                            <li class="current"><a title="US Dollar" href="#" class="dropdown-item medium text-medium">USD $</a></li>
                        </ul>
                    </div>

                    <!-- Choose Language -->

                    <div class="language-selector-wrapper dropdown js-dropdown float-right mr-3">
                        <a class="popup-title" href="javascript:void(0)" data-toggle="dropdown" title="Language" aria-label="Language dropdown">
                            <span class="hidden-xl-down medium text-light">Language:</span>
                            <span class="iso_code medium text-light">English</span>
                            <i class="fa fa-angle-down medium text-light"></i>
                        </a>
                        <ul class="dropdown-menu popup-content link">
                            <li class="current"><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="../../client/img/1.jpg" alt="en" width="16" height="11" /><span>English</span></a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="../../client/img/2.jpg" alt="fr" width="16" height="11" /><span>Français</span></a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="../../client/img/3.jpg" alt="de" width="16" height="11" /><span>Deutsch</span></a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="../../client/img/4.jpg" alt="it" width="16" height="11" /><span>Italiano</span></a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="../../client/img/5.jpg" alt="es" width="16" height="11" /><span>Español</span></a></li>
                            <li ><a href="javascript:void(0);" class="dropdown-item medium text-medium"><img src="../../client/img/6.jpg" alt="ar" width="16" height="11" /><span>اللغة العربية</span></a></li>
                        </ul>
                    </div>

                    <div class="currency-selector dropdown js-dropdown float-right mr-3">
                        <a href="javascript:void(0);" class="text-light medium">Wishlist</a>
                    </div>

                    <div class="currency-selector dropdown js-dropdown float-right mr-3">
                        <a href="javascript:void(0);" class="text-light medium">My Account</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Start Navigation -->
    <div class="header header-light dark-text">
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
                            <li>
                                <a href="#" onclick="openCart()">
                                    <i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">
                        <li><a href="{{route('home')}}">Home</a>
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

    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Support</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- ======================= Product Detail ======================== -->
    <section class="middle">
        <div class="container">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center d-block mb-5">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-lg-7 col-md-12">
                    <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x mb-4">
                        @foreach ($newCart as $item )

                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <!-- Image -->
                                    <a href="product.html"><img src="{{ $item['productInfo']->image ? '' . Storage::url($item['productInfo']->image) : 'http://placehold.it/100x100'}}" alt="..." class="img-fluid"></a>
                                </div>
                                <div class="col d-flex align-items-center justify-content-between">
                                    <div class="cart_single_caption pl-2">
                                        <h4 class="product_title fs-md ft-medium mb-1 lh-1">{{$item['productInfo']->product_name}}</h4>
                                        <p class="mb-1 lh-1"><span class="text-dark">Size: {{$item['productInfo']->size}}</span></p>
                                        <p class="mb-3 lh-1"><span class="text-dark">Color: {{$item['productInfo']->color}}</span></p>
                                        <h4 class="fs-md ft-medium mb-3 lh-1">VND{{number_format($item['productInfo']->price,3,",")}}</h4>
                                        <input value="{{$item['quantity']}}" class="mb-2 custom-select w-auto"/>

                                    </div>
                                    <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>

                    <div class="row align-items-end justify-content-between mb-10 mb-md-0">
                        <div class="col-12 col-md-7">
                            <!-- Coupon -->
                            <form class="mb-7 mb-md-0">
                                <label class="fs-sm ft-medium text-dark">Coupon code:</label>
                                <div class="row form-row">
                                    <div class="col">
                                        <input class="form-control" type="text" placeholder="Enter coupon code*">
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-dark" type="submit">Apply</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card mb-4 gray mfliud">
                        <div class="card-body">
                            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Subtotal</span> <span class="ml-auto text-dark ft-medium">
                                       VND{{number_format($subtotal,3,',')}}
                                    </span>
                                </li>
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Tax</span> <span class="ml-auto text-dark ft-medium">VND{{number_format($subtotal*0.1,3,',')}}</span>
                                </li>
                                <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                    <span>Total</span> <span class="ml-auto text-dark ft-medium">VND{{number_format(($subtotal + $subtotal*0.1),3,',')}}</span>
                                </li>
                                <li class="list-group-item fs-sm text-center">
                                    Shipping cost calculated at Checkout *
                                </li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-block btn-dark mb-3" href="checkout.html">Proceed to Checkout</a>

                    <a class="btn-link text-dark ft-medium" href="shop.html">
                        <i class="ti-back-left mr-2"></i> Continue Shopping
                    </a>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Product Detail End ======================== -->

    <!-- ============================= Customer Features =============================== -->
    <section class="px-0 py-3 br-top">
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="d-flex align-items-center justify-content-start py-2">
                        <div class="d_ico">
                            <i class="fas fa-shopping-basket theme-cl"></i>
                        </div>
                        <div class="d_capt">
                            <h5 class="mb-0">Free Shipping</h5>
                            <span class="text-muted">Capped at $10 per order</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="d-flex align-items-center justify-content-start py-2">
                        <div class="d_ico">
                            <i class="far fa-credit-card theme-cl"></i>
                        </div>
                        <div class="d_capt">
                            <h5 class="mb-0">Secure Payments</h5>
                            <span class="text-muted">Up to 6 months installments</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="d-flex align-items-center justify-content-start py-2">
                        <div class="d_ico">
                            <i class="fas fa-shield-alt theme-cl"></i>
                        </div>
                        <div class="d_capt">
                            <h5 class="mb-0">15-Days Returns</h5>
                            <span class="text-muted">Shop with fully confidence</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="d-flex align-items-center justify-content-start py-2">
                        <div class="d_ico">
                            <i class="fas fa-headphones-alt theme-cl"></i>
                        </div>
                        <div class="d_capt">
                            <h5 class="mb-0">24x7 Fully Support</h5>
                            <span class="text-muted">Get friendly support</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================= Customer Features ======================== -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="dark-footer skin-dark-footer style-2">
        <div class="footer-middle">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <div class="footer_widget">
                            <img src="../../client/img/logo-light.png" class="img-footer small mb-2" alt="" />

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
                                        <button type="button" class="input-group-text b-0 text-light"><i class="lni lni-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="address mt-3">
                                <h5 class="fs-sm text-light">Secure Payments</h5>
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

                <div class="cart_select_items py-2">
                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="../../client/img/product/4.jpg" width="60" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="../../client/img/product/7.jpg" width="60" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="../../client/img/product/8.jpg" width="60" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                </div>

                <div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
                    <h6 class="mb-0">Subtotal</h6>
                    <h3 class="mb-0 ft-medium">$417</h3>
                </div>

                <div class="cart_action px-3 py-3">
                    <div class="form-group">
                        <button type="button" class="btn d-block full-width btn-dark">Move To Cart</button>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Cart -->
    <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Cart">
        <div class="rightMenu-scroll">
            <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                <h4 class="cart_heading fs-md ft-medium mb-0">Products List</h4>
                <button onclick="closeCart()" class="close_slide"><i class="ti-close"></i></button>
            </div>
            <div class="right-ch-sideBar">

                <div class="cart_select_items py-2">
                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="../../client/img/product/4.jpg" width="60" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="../../client/img/product/7.jpg" width="60" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="../../client/img/product/8.jpg" width="60" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                </div>

                <div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
                    <h6 class="mb-0">Subtotal</h6>
                    <h3 class="mb-0 ft-medium">$1023</h3>
                </div>

                <div class="cart_action px-3 py-3">
                    <div class="form-group">
                        <button type="button" class="btn d-block full-width btn-dark">Checkout Now</button>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
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

</body>

<!-- Mirrored from themezhub.net/kumo-demo-2/kumo/shoping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Nov 2022 17:39:42 GMT -->
</html>
