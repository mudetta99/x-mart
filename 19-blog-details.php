<?php
    require "admin/function/connect.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/19-blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 22:15:49 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>XeMart - Ecommerce Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/assets/bootstrap.min.css">

		<!-- Fontawesome Icon -->
        <link rel="stylesheet" href="css/assets/font-awesome.min.css">

		<!-- Animate Css -->
        <link rel="stylesheet" href="css/assets/animate.css">

        <!-- Owl Slider -->
        <link rel="stylesheet" href="css/assets/owl.carousel.min.css">

        <!-- Custom Style -->
        <link rel="stylesheet" href="css/assets/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/assets/responsive.css">

    </head>
    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="load-list">
                <div class="load"></div>
                <div class="load load2"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Top Bar 2 -->
        <section class="top-bar2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-left d-flex">
                            <div class="lang-box">
                                <span><img src="images/fl-eng.png" alt="">English<i class="fa fa-angle-down"></i></span>
                                <ul class="list-unstyled">
                                    <li><img src="images/fl-eng.png" alt="">English</li>
                                    <li><img src="images/fl-fra.png" alt="">French</li>
                                    <li><img src="images/fl-ger.png" alt="">German</li>
                                    <li><img src="images/fl-bra.png" alt="">Brazilian</li>
                                </ul>
                            </div>
                            <div class="mny-box">
                                <span>USD<i class="fa fa-angle-down"></i></span>
                                <ul class="list-unstyled">
                                    <li>USD</li>
                                    <li>GBP</li>
                                    <li>EUR</li>
                                </ul>
                            </div>
                            <div class="call-us">
                                <p><img src="images/phn.png" alt="">+1 (111) 426 6573</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-right text-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#"><img src="images/user.png" alt="">My Account</a></li>
                                <li class="list-inline-item"><a href="#"><img src="images/wishlist.png" alt="">Wishlist</a></li>
                                <li class="list-inline-item"><a href="#"><img src="images/checkout.png" alt="">Checkout</a></li>
                                <li class="list-inline-item"><a href="#"><img src="images/login.png" alt="">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Bar 2 -->

        <!-- Logo Area 2 -->
        <section class="logo-area2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 padding-fix">
                        <form action="#" class="search-bar d-flex">
                            <input type="text" name="search-bar" placeholder="I'm looking for...">
                            <div class="search-cat">
                                <select class="form-control scat-id">
                                    <option>All Categories</option>
                                    <option>Category One</option>
                                    <option>Category Two</option>
                                    <option>Category Three</option>
                                    <option>Category Four</option>
                                    <option>Category Five</option>
                                    <option>Category Six</option>
                                    <option>Category Seven</option>
                                </select>
                            </div>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-2">
                        <div class="carts-area d-flex">
                            <div class="wsh-box ml-auto">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                    <img src="images/heart.png" alt="favorite">
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="cart-box ml-4">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Shopping Cart" class="cart-btn">
                                    <img src="images/cart.png" alt="cart">
                                    <span>2</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Area 2 -->

        <!-- Cart Body -->
        <div class="cart-body">
            <div class="close-btn">
                <button class="close-cart"><img src="images/close.png" alt="">Close</button>
            </div>
            <div class="crt-bd-box">
                <div class="cart-heading text-center">
                    <h5>Shopping Cart</h5>
                </div>
                <div class="cart-content">
                    <div class="content-item d-flex justify-content-between">
                        <div class="cart-img">
                            <a href="#"><img src="images/cart1.png" alt=""></a>
                        </div>
                        <div class="cart-disc">
                            <p><a href="#">SMART LED TV</a></p>
                            <span>1 x $199.00</span>
                        </div>
                        <div class="delete-btn">
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                    <div class="content-item d-flex justify-content-between">
                        <div class="cart-img">
                            <a href="#"><img src="images/cart2.png" alt=""></a>
                        </div>
                        <div class="cart-disc">
                            <p><a href="#">SMART LED TV</a></p>
                            <span>1 x $199.00</span>
                        </div>
                        <div class="delete-btn">
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="cart-btm">
                    <p class="text-right">Sub Total: <span>$398.00</span></p>
                    <a href="#">Checkout</a>
                </div>
            </div>
        </div>
        <div class="cart-overlay"></div>
        <!-- End Cart Body -->

        <!-- Sticky Menu -->
        <section class="sticky-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <div class="sticky-logo">
                            <a href="index-2.php"><img src="images/logo.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>HOME <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="index-2.php">Home Style 1</a></li>
                                        <li><a href="02-home-two.php">Home Style 2</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item mega-menu"><a>MEGA MENU <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-box">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="clt-area">
                                                    <h6>Clothing</h6>
                                                    <div class="link-box">
                                                        <a href="#">- Western Clothing</a>
                                                        <a href="#">- Traditional Clothing</a>
                                                        <a href="#">- Winter Clothing</a>
                                                        <a href="#">- Summer Clothing</a>
                                                        <a href="#">- Inner Wear</a>
                                                        <a href="#">- Night Wear</a>
                                                        <a href="#">- Mens Clothing</a>
                                                        <a href="#">- Womens Clothing</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="sm-phn">
                                                    <h6>Smartphones</h6>
                                                    <div class="dept-box">
                                                        <a href="#">- Samsung</a>
                                                        <a href="#">- Huawei</a>
                                                        <a href="#">- One Plus</a>
                                                        <a href="#">- Xiaomi</a>
                                                        <a href="#">- Iphone</a>
                                                        <a href="#">- Blackberry</a>
                                                        <a href="#">- Nokia</a>
                                                        <a href="#">- Oppo</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="lt-news">
                                                    <h6>Latest News</h6>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-1.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 10, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-2.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 12, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-3.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 21, 2020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-slider owl-carousel">
                                                    <div class="slider-item">
                                                        <img src="images/mega-1.jpg" alt="" class="img-fluid">
                                                        <span>-65%</span>
                                                    </div>
                                                    <div class="slider-item">
                                                        <img src="images/mega-2.jpg" alt="" class="img-fluid">
                                                        <span>-50%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mega-bnr">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-1.jpg" alt="">
                                                                <span>Camera</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-2.jpg" alt="">
                                                                <span>Mouse</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-3.jpg" alt="">
                                                                <span>Earphone</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-4.jpg" alt="">
                                                                <span>Speaker</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item"><a>PAGES <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="03-about-us.php">About Us</a></li>
                                        <li><a href="04-category.php">Category</a></li>
                                        <li><a href="05-single-product.php">Single Product</a></li>
                                        <li><a href="06-shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="07-checkout.php">Checkout</a></li>
                                        <li><a href="08-login.php">Log In</a></li>
                                        <li><a href="09-register.php">Register</a></li>
                                        <li><a href="10-wishlist.php">Wishlist</a></li>
                                        <li><a href="11-compare.php">Compare</a></li>
                                        <li><a href="15-track-order.php">Track Order</a></li>
                                        <li><a href="12-terms-condition.php">Terms & Condition</a></li>
                                        <li><a href="13-faq.php">Faq</a></li>
                                        <li><a href="14-404.php">404</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>BLOG <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="16-blog-one.php">Blog Style 1</a></li>
                                        <li><a href="17-blog-two.php">Blog Style 2</a></li>
                                        <li><a href="18-blog-three.php">Blog Style 3</a></li>
                                        <li><a href="19-blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="20-contact.php">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-2">
                        <div class="carts-area d-flex">
                            <div class="src-box">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search Here">
                                    <button type="button" name="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="wsh-box ml-auto">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                    <img src="images/heart.png" alt="favorite">
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="cart-box ml-4">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Shopping Cart" class="cart-btn">
                                    <img src="images/cart.png" alt="cart">
                                    <span>2</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Sticky Menu -->

        <!-- Menu Area 2 -->
        <section class="menu-area2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-0">
                        <div class="sidemenu">
                            <p>All Categories <i class="fa fa-bars"></i></p>
                            <ul class="list-unstyled gt-menu">
                                <li><a href="#"><img src="images/m-cloth.png" alt="">Men's Clothing<i class="fa fa-angle-right"></i></a>
                                    <div class="mega-menu">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="smartphone">
                                                    <h6>Smartphones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Asus</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Oppo</a>
                                                    <a href="#">- One Plus</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Htc</a>
                                                    <a href="#">- Vivo</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tablet">
                                                    <h6>Tablets</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Asus</a>
                                                </div>
                                                <div class="f-phone">
                                                    <h6>Feature Phones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Infinix</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="accesories">
                                                    <h6>Accessories</h6>
                                                    <a href="#">- Power Bank</a>
                                                    <a href="#">- Battery & Charger</a>
                                                    <a href="#">- Cables & Adapters</a>
                                                    <a href="#">- Back / Flip Cover</a>
                                                    <a href="#">- Screen Protector</a>
                                                    <a href="#">- Earphones</a>
                                                    <a href="#">- Memory Card</a>
                                                    <a href="#">- Phone Cases</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mg-bnr">
                                                    <img src="images/ipn.png" alt="">
                                                    <div class="mg-content text-right">
                                                        <h4>Iphone</h4>
                                                        <span>Save upto 50% off</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img src="images/w-cloth.png" alt="">Women's Clothing<i class="fa fa-angle-right"></i></a>
                                    <div class="mega-menu">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="smartphone">
                                                    <h6>Smartphones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Asus</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Oppo</a>
                                                    <a href="#">- One Plus</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Htc</a>
                                                    <a href="#">- Vivo</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tablet">
                                                    <h6>Tablets</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Asus</a>
                                                </div>
                                                <div class="f-phone">
                                                    <h6>Feature Phones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Infinix</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="accesories">
                                                    <h6>Accessories</h6>
                                                    <a href="#">- Power Bank</a>
                                                    <a href="#">- Battery & Charger</a>
                                                    <a href="#">- Cables & Adapters</a>
                                                    <a href="#">- Back / Flip Cover</a>
                                                    <a href="#">- Screen Protector</a>
                                                    <a href="#">- Earphones</a>
                                                    <a href="#">- Memory Card</a>
                                                    <a href="#">- Phone Cases</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mg-bnr tab-bnr">
                                                    <img src="images/tab.png" alt="">
                                                    <div class="mg-content text-right">
                                                        <h4>Tablet</h4>
                                                        <span>Save upto 50% off</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img src="images/ele.png" alt="">Electronics<i class="fa fa-angle-right"></i></a>
                                    <div class="mega-menu">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="smartphone">
                                                    <h6>Smartphones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Asus</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Oppo</a>
                                                    <a href="#">- One Plus</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Htc</a>
                                                    <a href="#">- Vivo</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tablet">
                                                    <h6>Tablets</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Asus</a>
                                                </div>
                                                <div class="f-phone">
                                                    <h6>Feature Phones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Infinix</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="accesories">
                                                    <h6>Accessories</h6>
                                                    <a href="#">- Power Bank</a>
                                                    <a href="#">- Battery & Charger</a>
                                                    <a href="#">- Cables & Adapters</a>
                                                    <a href="#">- Back / Flip Cover</a>
                                                    <a href="#">- Screen Protector</a>
                                                    <a href="#">- Earphones</a>
                                                    <a href="#">- Memory Card</a>
                                                    <a href="#">- Phone Cases</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mg-bnr pw-bnr">
                                                    <img src="images/pbank.png" alt="">
                                                    <div class="mg-content text-right">
                                                        <h4>Powerbank</h4>
                                                        <span>Save upto 50% off</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img src="images/sm.png" alt="">Smartphone & Tablet</a></li>
                                <li><a href="#"><img src="images/com.png" alt="">Computer & Office</a></li>
                                <li><a href="#"><img src="images/tv.png" alt="">Home Applience</a></li>
                                <li><a href="#"><img src="images/shoe.png" alt="">Leather & Shoes</a></li>
                                <li><a href="#"><img src="images/kid.png" alt="">Kids & Babies</a></li>
                                <li><a href="#"><img src="images/watch.png" alt="">Jewelary & Watches</a></li>
                                <li><a href="#"><img src="images/health.png" alt="">Health & Beauty</a></li>
                                <li><a href="#"><img src="images/car.png" alt="">Automobiles</a></li>
                                <li><a href="#"><img src="images/sport.png" alt="">Sports & Outdoors</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>HOME <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="index-2.php">Home Style 1</a></li>
                                        <li><a href="02-home-two.php">Home Style 2</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>PAGE'S <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="03-about-us.php">About Us</a></li>
                                        <li><a href="04-category.php">Category</a></li>
                                        <li><a href="05-single-product.php">Single Product</a></li>
                                        <li><a href="06-shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="07-checkout.php">Checkout</a></li>
                                        <li><a href="08-login.php">Log In</a></li>
                                        <li><a href="09-register.php">Register</a></li>
                                        <li><a href="10-wishlist.php">Wishlist</a></li>
                                        <li><a href="11-compare.php">Compare</a></li>
                                        <li><a href="15-track-order.php">Track Order</a></li>
                                        <li><a href="12-terms-condition.php">Terms & Condition</a></li>
                                        <li><a href="13-faq.php">Faq</a></li>
                                        <li><a href="14-404.php">404</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item mega-menu"><a>MEGA MENU <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-box">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="clt-area">
                                                    <h6>Clothing</h6>
                                                    <div class="link-box">
                                                        <a href="#">- Western Clothing</a>
                                                        <a href="#">- Traditional Clothing</a>
                                                        <a href="#">- Winter Clothing</a>
                                                        <a href="#">- Summer Clothing</a>
                                                        <a href="#">- Inner Wear</a>
                                                        <a href="#">- Night Wear</a>
                                                        <a href="#">- Mens Clothing</a>
                                                        <a href="#">- Womens Clothing</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="sm-phn">
                                                    <h6>Smartphones</h6>
                                                    <div class="dept-box">
                                                        <a href="#">- Samsung</a>
                                                        <a href="#">- Huawei</a>
                                                        <a href="#">- One Plus</a>
                                                        <a href="#">- Xiaomi</a>
                                                        <a href="#">- Iphone</a>
                                                        <a href="#">- Blackberry</a>
                                                        <a href="#">- Nokia</a>
                                                        <a href="#">- Oppo</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="lt-news">
                                                    <h6>Latest News</h6>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-1.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 10, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-2.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 12, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-3.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 21, 2020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-slider owl-carousel">
                                                    <div class="slider-item">
                                                        <img src="images/mega-1.jpg" alt="" class="img-fluid">
                                                        <span>-65%</span>
                                                    </div>
                                                    <div class="slider-item">
                                                        <img src="images/mega-2.jpg" alt="" class="img-fluid">
                                                        <span>-50%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mega-bnr">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-1.jpg" alt="">
                                                                <span>Camera</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-2.jpg" alt="">
                                                                <span>Mouse</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-3.jpg" alt="">
                                                                <span>Earphone</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-4.jpg" alt="">
                                                                <span>Speaker</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item"><a>BLOG <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="16-blog-one.php">Blog Style 1</a></li>
                                        <li><a href="17-blog-two.php">Blog Style 2</a></li>
                                        <li><a href="18-blog-three.php">Blog Style 3</a></li>
                                        <li><a href="19-blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="20-contact.php">CONTACT</a></li>
                                <li class="list-inline-item cup-btn"><a href="#">Get Your Coupon</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Area 2 -->

        <!-- Mobile Menu -->
        <section class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <a href="#"><img src="images/logo.png" alt=""></a>
                                <a href="#"><span>Sign In</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Home</a>
                                        <ul class="list-unstyled">
                                            <li><a href="index-2.php">Home Style 1</a></li>
	                                        <li><a href="02-home-two.php">Home Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="list-unstyled">
                                            <li><a href="03-about-us.php">About Us</a></li>
                                            <li><a href="04-category.php">Category</a></li>
                                            <li><a href="05-single-product.php">Single Product</a></li>
                                            <li><a href="06-shopping-cart.php">Shopping Cart</a></li>
                                            <li><a href="07-checkout.php">Checkout</a></li>
                                            <li><a href="08-login.php">Log In</a></li>
                                            <li><a href="09-register.php">Register</a></li>
                                            <li><a href="10-wishlist.php">Wishlist</a></li>
                                            <li><a href="11-compare.php">Compare</a></li>
                                            <li><a href="15-track-order.php">Track Order</a></li>
                                            <li><a href="12-terms-condition.php">Terms & Condition</a></li>
                                            <li><a href="13-faq.php">Faq</a></li>
                                            <li><a href="14-404.php">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul class="list-unstyled">
                                            <li><a href="16-blog-one.php">Blog Style 1</a></li>
                                            <li><a href="17-blog-two.php">Blog Style 2</a></li>
                                            <li><a href="18-blog-three.php">Blog Style 3</a></li>
                                            <li><a href="19-blog-details.php">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="20-contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mobile Menu -->

        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><span>||</span> Blog Deatails</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Blog Details -->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <?php
                        
                        $select = $connect -> query("SELECT * FROM blog");
                        $row = $select -> fetch_assoc();
                        ?>
                        <div class="blog-d-box">
                            <div class="image-box">
                                <img src="admin/image/<?php echo$row['img']?>" alt="" class="img-fluid">
                            </div>
                            <div class="image-content">
                                <h4><?php echo$row['title'] ?></h4>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fa fa-calendar"></i><?php echo$row['date'] ?></li>
                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#"><?php echo$row['publisher'] ?></a></li>
                                    <li class="list-inline-item"><i class="fa fa-commenting-o"></i><a href="#">(<span>23</span>)</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nulla voluptatum voluptates aliquam laudantium, id tempora rerum vero dolorem temporibus praesentium autem suscipit labore tempore! Non iste esse, nobis dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quisquam repellendus ea. Nulla quae quas modi, repellendus placeat dolores officiis aperiam illum natus, sint reiciendis, voluptatibus architecto illo eum dolorum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Dignissimos, nulla voluptatum voluptates aliquam laudantium, id tempora rerum vero dolorem temporibus praesentium autem suscipit labore tempore! Non iste esse, nobis dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quisquam repellendus ea.
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, dolor obcaecati! Animi explicabo ratione omnis non, voluptates, minima eos ut nisi accusamus quod sed molestiae. Illo deserunt doloribus nemo recusandae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor dolorem odit est, voluptas ducimus assumenda adipisicing elit. Distinctio quisquam repellendus ea.</span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam molestiae earum pariatur possimus itaque magni dolore corrupti rem perspiciatis id optio sunt fugiat suscipit, sapiente! Iure dolorem voluptas fugit, autem. Quisquam molestiae earum pariatur possimus itaque magni dolore corrupti rem perspiciatis id optio.
                                </p>
                            </div>
                            <div class="blog-btns d-flex justify-content-between">
                                <div class="share-btn">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Share :</li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <div class="post-bfaf">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-long-arrow-left"></i>Prev</a></li>
                                        <li class="list-inline-item"><a href="#">Next<i class="fa fa-long-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-comment">
                                <h4>Comments (13)</h4>
                                <div class="comment-box d-flex">
                                    <div class="comment-img">
                                        <a href="#"><img src="images/testimonial-1.jpg" alt=""></a>
                                    </div>
                                    <div class="comment-con">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="#">John Doe</a></li>
                                            <li class="list-inline-item"><a href="#">Reply</a></li>
                                        </ul>
                                        <span>2 days ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nam, non magnam molestias aspernatur. Magni suscipit sequi harum odit sunt est, enim deserunt aspernatur.</p>
                                    </div>
                                </div>
                                <div class="comment-box comment-box2 d-flex">
                                    <div class="comment-img">
                                        <a href="#"><img src="images/testimonial-2.jpg" alt=""></a>
                                    </div>
                                    <div class="comment-con">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="#">Mary Chang</a></li>
                                            <li class="list-inline-item"><a href="#">Reply</a></li>
                                        </ul>
                                        <span>2 days ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nam, non magnam molestias aspernatur. Magni suscipit sequi harum odit sunt est, enim deserunt aspernatur.</p>
                                    </div>
                                </div>
                                <div class="comment-box d-flex">
                                    <div class="comment-img">
                                        <a href="#"><img src="images/testimonial-1.jpg" alt=""></a>
                                    </div>
                                    <div class="comment-con">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="#">John Doe</a></li>
                                            <li class="list-inline-item"><a href="#">Reply</a></li>
                                        </ul>
                                        <span>2 days ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nam, non magnam molestias aspernatur. Magni suscipit sequi harum odit sunt est, enim deserunt aspernatur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h5>Leave Your Comment</h5>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea placeholder="Comment" required=""></textarea>
                                            <button type="submit">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-sr">
                                    <div class="sec-title">
                                        <h6>Search Blog</h6>
                                    </div>
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Search Here" required>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="blog-po">
                                    <div class="sec-title">
                                        <h6>Recent Post</h6>
                                    </div>
                                    <div class="post-box">
                                        <?php 
                                            $select = $connect -> query("SELECT * FROM blog");
                                            foreach($select as $row){
                                                ?>
                                                <div class="rec-post d-flex">
                                            <div>
                                                <a href="#"><img src="admin/image/<?php echo$row['img'] ?>" alt=""></a>
                                            </div>
                                            <div>
                                                <p><a href="#"><?php echo$row['description'] ?></a></p>
                                                <span>Jan 10, 2020</span>
                                            </div>
                                        </div>

                                            <?php } ?>
                                        

                                        

                                        <!-- <div class="rec-post d-flex">
                                            <div>
                                                <a href="#"><img src="images/mega-img-2.jpg" alt=""></a>
                                            </div>
                                            <div>
                                                <p><a href="#">Lorem ipsum dolor sit amet...</a></p>
                                                <span>Jan 10, 2020</span>
                                            </div>
                                        </div>
                                        <div class="rec-post d-flex">
                                            <div>
                                                <a href="#"><img src="images/mega-img-3.jpg" alt=""></a>
                                            </div>
                                            <div>
                                                <p><a href="#">Lorem ipsum dolor sit amet...</a></p>
                                                <span>Feb 10, 2020</span>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="blog-cat">
                                    <div class="sec-title">
                                        <h6>Categories</h6>
                                    </div>
                                    <div class="cat-box">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Design <span>36</span></a></li>
                                            <li><a href="#">Photography <span>43</span></a></li>
                                            <li><a href="#">Branding <span>23</span></a></li>
                                            <li><a href="#">Corporate <span>34</span></a></li>
                                            <li><a href="#">Graphic <span>27</span></a></li>
                                            <li><a href="#">Journal <span>19</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="blog-banner">
                                    <a href="#"><img src="images/s-banner2.jpg" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="blog-tag">
                                    <div class="sec-title">
                                        <h6>Popular Tag</h6>
                                    </div>
                                    <div class="tag-box">
                                        <a href="#">HTML</a>
                                        <a href="#">CSS</a>
                                        <a href="#">Photoshop</a>
                                        <a href="#">Jquery</a>
                                        <a href="#">PHP</a>
                                        <a href="#">Wordpress</a>
                                        <a href="#">Bootstrap</a>
                                        <a href="#">Javascript</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details -->

        <!-- Brand area 2 -->
        <section class="brand2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tp-bnd owl-carousel">
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-01.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-02.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-03.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-04.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-05.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-06.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-07.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Brand area 2 -->

        <!-- Footer Area -->
        <section class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="f-contact">
                            <h5>Contact Info</h5>
                            <div class="f-add">
                                <i class="fa fa-map-marker"></i>
                                <span>Address :</span>
                                <p>795 South Park Avenue, New York, NY USA 94107</p>
                            </div>
                            <div class="f-email">
                                <i class="fa fa-envelope"></i>
                                <span>Email :</span>
                                <p>enquery@domain.com</p>
                            </div>
                            <div class="f-phn">
                                <i class="fa fa-phone"></i>
                                <span>Phone :</span>
                                <p>+1 908 875 7678</p>
                            </div>
                            <div class="f-social">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-cat">
                            <h5>Categories</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-angle-right"></i>Clothing</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Electronics</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Smartphones & Tablets</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Computer & Office</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Home Appliances</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Leather & Shoes</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Kids & Babies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-link">
                            <h5>Quick Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-angle-right"></i>My Account</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Shopping Cart</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>My Wishlist</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Checkout</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Order History</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Log In</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Our Locations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-sup">
                            <h5>Support</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Payment Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Return Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Frequently asked questions</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Terms & Condition</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Delivery Info</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-btm">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright &copy; 2020 | Designed With <i class="fa fa-heart"></i> by <a href="#" target="_blank">SnazzyTheme</a></p>
                    </div>
                    <div class="col-md-6 text-right">
                        <img src="images/payment.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="back-to-top text-center">
                <img src="images/backtotop.png" alt="" class="img-fluid">
            </div>
        </section>
        <!-- End Footer Area -->


        <!-- =========================================
        JavaScript Files
        ========================================== -->

        <!-- jQuery JS -->
        <script src="js/assets/vendor/jquery-1.12.4.min.js"></script>

        <!-- Bootstrap -->
        <script src="js/assets/popper.min.js"></script>
        <script src="js/assets/bootstrap.min.js"></script>

        <!-- Owl Slider -->
        <script src="js/assets/owl.carousel.min.js"></script>

        <!-- Wow Animation -->
        <script src="js/assets/wow.min.js"></script>

        <!-- Price Filter -->
        <script src="js/assets/price-filter.js"></script>

        <!-- Mean Menu -->
        <script src="js/assets/jquery.meanmenu.min.js"></script>

        <!-- Custom JS -->
        <script src="js/plugins.js"></script>
        <script src="js/custom.js"></script>

    </body>

<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/19-blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 22:15:50 GMT -->
</html>
