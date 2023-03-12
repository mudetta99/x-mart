<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /><style>

    .out_search{
        font-family:Lucida Console;
        border-radius:30px 10px;
        background:#305EE4;
        margin-top:-13px;
        z-index: 3;
        position:relative;
        opacity: 75%;

    }
    .out_search li {
        margin:3px;
        
    }

    .out_search li a{
        color:#fff;
        font-size:15px;
        font-weight:bold;
        width:100%;

    }

    .out_search li a:hover{
        background:#CCEAEA;
        color:#293757;
        letter-spacing:3px;
        font-weight:5px;
        border-left: 6px solid #d7582b;
    }

   
   


</style>
<?php
    require "admin/function/connect.php";
    // session_start();
    // if(!isset($_SESSION['login_c'])){
    //     header("location:08-login.php");
    // }
?>

<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 22:14:20 GMT -->
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

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="load-list">
                <div class="load">
                </div>
                <div class="load load2"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <?php
            include "design/top_bar.php";
        ?>

        <!-- Logo Area -->
        <section class="logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-5 " >
                        <form action="#" class="search-bar" >
                            <input type="text" name="search-bar" placeholder="I'm looking for..." class="btn-search" >
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <div class="out_search"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="carts-area d-flex">
                            <div class="call-box d-flex">
                                <div class="call-ico">
                                    <img src="images/call.png" alt="">
                                </div>
                                <div class="call-content">
                                    <span>Call Us</span>
                                    <p>+1 (111) 426 6573</p>
                                </div>
                            </div>
                            <div class="cart-box ml-auto text-center">
                                <a href="#" class="cart-btn">
                                    <img src="images/cart.png" alt="cart">
                                    <span class="numbers"><?php echo$count_num ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Area -->
            <?php
            include "design/cart_box.php";
            ?>

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
                                        <li><a href="03-about-us.php" target="_blank">About Us</a></li>
                                        <li><a href="04-category.php?page=1" target="_blank">Category</a></li>
                                        <li><a href="05-single-product.php" target="_blank" <?php if(isset($_SESSION['login_c']))
                                        {echo "hidden";} ?>>Single Product</a></li>
                                        <li><a href="06-shopping-cart.php" target="_blank">Shopping Cart</a></li>
                                        <li><a href="07-checkout.php" target="_blank">Checkout</a></li>
                                        <li><a href="08-login.php" target="_blank" <?php 
                                            if(isset($_SESSION['login_c'])){echo "hidden";}
                                        ?>>Log In</a></li>
                                        <li><a href="09-register.php" target="_blank">Register</a></li>
                                        <li><a href="10-wishlist.php" target="_blank">Wishlist</a></li>
                                        <li><a href="11-compare.php" target="_blank">Compare</a></li>
                                        <li><a href="15-track-order.php" target="_blank">Track Order</a></li>
                                        <li><a href="12-terms-condition.php" target="_blank">Terms & Condition</a></li>
                                        <li><a href="13-faq.php" target="_blank">Faq</a></li>
                                        <li><a href="14-404.php" target="_blank">404</a></li>
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
                                <div class="out-search"></div>
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

        <!-- Menu Area -->
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
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
                                    <li><a href="03-about-us.php" target="_blank">About Us</a></li>
                                        <li><a href="04-category.php?page=1" target="_blank">Category</a></li>
                                        <li><a href="05-single-product.php" target="_blank" <?php if(isset($_SESSION['login_c']))
                                        {echo "hidden";} ?>>Single Product</a></li>
                                        <li><a href="06-shopping-cart.php" target="_blank">Shopping Cart</a></li>
                                        <li><a href="07-checkout.php" target="_blank">Checkout</a></li>
                                        <li><a href="08-login.php" target="_blank" <?php 
                                            if(isset($_SESSION['login_c'])){echo "hidden";}
                                        ?>>Log In</a></li>
                                        <li><a href="09-register.php" target="_blank">Register</a></li>
                                        <li><a href="10-wishlist.php" target="_blank">Wishlist</a></li>
                                        <li><a href="11-compare.php" target="_blank">Compare</a></li>
                                        <li><a href="15-track-order.php" target="_blank">Track Order</a></li>
                                        <li><a href="12-terms-condition.php" target="_blank">Terms & Condition</a></li>
                                        <li><a href="13-faq.php" target="_blank">Faq</a></li>
                                        <li><a href="14-404.php" target="_blank">404</a></li>
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
                                <li class="list-inline-item trac-btn"><a href="#">Track Your Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Area -->

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
                                        <li><a href="03-about-us.php" target="_blank">About Us</a></li>
                                        <li><a href="04-category.php?page=1" target="_blank">Category</a></li>
                                        <li><a href="05-single-product.php" target="_blank" <?php if(isset($_SESSION['login_c']))
                                        {echo "hidden";} ?>>Single Product</a></li>
                                        <li><a href="06-shopping-cart.php" target="_blank">Shopping Cart</a></li>
                                        <li><a href="07-checkout.php" target="_blank">Checkout</a></li>
                                        <li><a href="08-login.php" target="_blank" <?php 
                                            if(isset($_SESSION['login_c'])){echo "hidden";}
                                        ?>>Log In</a></li>
                                        <li><a href="09-register.php" target="_blank">Register</a></li>
                                        <li><a href="10-wishlist.php" target="_blank">Wishlist</a></li>
                                        <li><a href="11-compare.php" target="_blank">Compare</a></li>
                                        <li><a href="15-track-order.php" target="_blank">Track Order</a></li>
                                        <li><a href="12-terms-condition.php" target="_blank">Terms & Condition</a></li>
                                        <li><a href="13-faq.php" target="_blank">Faq</a></li>
                                        <li><a href="14-404.php" target="_blank">404</a></li>
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

        <!-- Slider Area -->
        <section class="slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-0">
                        <div class="menu-widget">
                            <p><i class="fa fa-bars"></i>All Categories</p>
                            <ul class="list-unstyled">
                                <li><a href="04-category.php?id=1" target="_blank"><img src="images/m-cloth.png" alt="">Men's Clothing<i class="fa fa-angle-right"></i></a>
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
                                <li><a href="04-category.php?id=2" target="_blank"><img src="images/w-cloth.png" alt="">Women's Clothing<i class="fa fa-angle-right"></i></a>
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
                                <li><a href="04-category.php?id=3" target="_blank"><img src="images/ele.png" alt="">Electronics<i class="fa fa-angle-right"></i></a>
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
                                <li><a href="04-category.php?id=4" target="_blank"><img src="images/sm.png" alt="">Smartphone & Tablet</a></li>
                                <li><a href="04-category.php?id=5" target="_blank"><img src="images/com.png" alt="">Computer & Office</a></li>
                                <li><a href="04-category.php?id=5" target="_blank"><img src="images/tv.png" alt="">Home Applience</a></li>
                                <li><a href="04-category.php?id=6" target="_blank"><img src="images/shoe.png" alt="">Leather & Shoes</a></li>
                                <li><a href="04-category.php?id=7" target="_blank"><img src="images/kid.png" alt="">Kids & Babies</a></li>
                                <li><a href="04-category.php?id=8" target="_blank"><img src="images/watch.png" alt="">Jewelary & Watches</a></li>
                                <li><a href="04-category.php?id=9" target="_blank"><img src="images/health.png" alt="">Health & Beauty</a></li>
                                <li><a href="04-category.php?id=10" target="_blank"><img src="images/car.png" alt="">Automobiles</a></li>
                                <li><a href="04-category.php?id=11" target="_blank"><img src="images/sport.png" alt="">Sports & Outdoors</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 padding-fix-l20">
                        <div class="owl-carousel owl-slider">
                            <div class="slider-item slider-item1">
                                <img src="images/girl-1.png" alt="" class="img1 wow fadeInRight effect"  data-wow-duration="1s" data-wow-delay="0s">
                                <div class="slider-box">
                                    <div class="slider-table">
                                        <div class="slider-tablecell">
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                                <h5>Big Sale</h5>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                                <h2>New Product Collection</h2>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                                <p>Save Up To 25% Off</p>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                                <a href="#">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item slider-item2">
                                <img src="images/girl-2.png" alt="" class="img2 wow fadeInRight effect"  data-wow-duration="1s" data-wow-delay="0s">
                                <div class="slider-box">
                                    <div class="slider-table">
                                        <div class="slider-tablecell text-right">
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                                <h5>Home Appliance</h5>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                                <h2>Top Quality Products</h2>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                                <p>Save Up To 50% Off</p>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                                <a href="#">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-btm-box d-flex justify-content-around">
                            
                            <div class="single-box mr-20">
                                <a href="04-category.php?id=5" target="_blank"><img src="images/sb-1.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="single-box mr-20">
                                <a href="04-category.php?id=3" target="_blank"><img src="images/sb-2.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="single-box">
                                <a href="04-category.php?id=4" target="_blank"><img src="images/sb-3.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slider Area -->

        <!-- Product Area-->
        <section class="product-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bt-deal">
                                    <div class="sec-title">
                                        <h6>Best Deals</h6>
                                    </div>
                                    <div class="bt-body owl-carousel">
                                        <div class="bt-items">
                                            <?php 
                                            $select_d = $connect -> query("SELECT * FROM products WHERE sale >= 1000");
                                            foreach($select_d as $row):

                                            
                                            ?>
                                            <div class="bt-box d-flex">
                                                <div class="bt-img">
                                                    <a href="#"><img src="admin/image/<?php $arr=explode("/",$row['img']); echo$arr[0]; ?>" alt=""></a>
                                                </div>
                                                <div class="bt-content">
                                                    <p><a href="#"><?php echo$row['name'] ?></a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="<?php if($row['rate'] > 0){echo "fa fa-star";}else{echo "fa fa-star-o";} ?>"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$<?php echo$row['price'] - $row['sale'] ?></li>
                                                        <li class="list-inline-item">$<?php echo$row['sale'] ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php endforeach ?>
                                            

                                        </div>
                                        <div class="bt-items">
                                            <div class="bt-box d-flex">
                                                <div class="bt-img">
                                                    <a href="#"><img src="images/sbar-2.png" alt=""></a>
                                                </div>
                                                <div class="bt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ht-offer">
                                    <div class="sec-title">
                                        <h6>Hot Offer</h6>
                                    </div>
                                    <div class="ht-body owl-carousel">
                                                <?php 
                                                    $select_prd = $connect -> query("SELECT * FROM products WHERE sale >= 5000 ");
                                                    foreach($select_prd as $row_prd):
                                                ?>
                                        <div class="ht-item">
                                            <div class="ht-img">
                                                <a href="05-single-product.php?id=<?php echo$row_prd['id'] ?>"><img src="admin/image/<?php $arr=explode("/",$row_prd['img']); echo$arr[0]; ?>" alt="" class="img-fluid"></a>
                                                <span>- 25%</span>
                                                <ul class="list-unstyled list-inline counter-box">
                                                    <li class="list-inline-item">185 <p>Days</p></li>
                                                    <li class="list-inline-item">11 <p>Hrs</p></li>
                                                    <li class="list-inline-item">39 <p>Mins</p></li>
                                                    <li class="list-inline-item">51 <p>Sec</p></li>
                                                </ul>
                                            </div>
                                            <div class="ht-content">
                                                <p><a href="05-single-product.php?id=<?php echo$row_prd['id'] ?>"><?php echo$row_prd['name'] ?></a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline price">
                                                    <li class="list-inline-item">$<?php echo$row_prd['price'] - $row_prd['sale'] ?></li>
                                                    <li class="list-inline-item">$<?php echo$row_prd['sale'] ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php endforeach ?>

                                       

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="hm-test">
                                    <div class="test-body owl-carousel">
                                        <div class="test-item text-center">
                                            <img src="images/test-1.jpg" alt="" class="img-fluid">
                                            <h6>John Doe</h6>
                                            <span>Photographer</span>
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore."</p>
                                        </div>
                                        <div class="test-item text-center">
                                            <img src="images/test-2.jpg" alt="" class="img-fluid">
                                            <h6>Eric Shell</h6>
                                            <span>Developer</span>
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="top-rtd">
                                    <div class="sec-title">
                                        <h6>Top Rated</h6>
                                    </div>
                                    <div class="rt-slider owl-carousel">
                                        <div class="rt-items">
                                            <?php
                                                $select_r = $connect -> query("SELECT * FROM products WHERE rate = 5");
                                                foreach($select_r as $row_r):
                                            ?>
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="05-single-product.php?id=<?php echo$row_r['id'] ?>" target="_blank"><img src="admin/image/<?php $arr = explode("/",$row_r['img']); echo$arr[0] ?>" alt=""></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="05-single-product.php?id=<?php echo$row_r['id'] ?>" target="_blank"><?php echo$row_r['name'] ?></a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$<?php echo$row_r['price'] - $row_r['sale'] ?></li>
                                                        <li class="list-inline-item">$<?php echo$row_r['sale'] ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php endforeach ?>
                                        </div>
                                        <div class="rt-items">
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-10.png" alt=""></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-11.png" alt=""></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-12.png" alt=""></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-13.png" alt=""></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" <?php if(isset($_SESSION['login_c'])){echo "hidden";} ?>>
                                <div class="nw-ltr">
                                    <div class="sec-title">
                                        <h6>Newsletter</h6>
                                    </div>
                                    <div class="nw-box">
                                        <p>Sign Up And Get Latest News, Updates, Offers & Deals</p>
                                        <form class="nw-form" action="09-register.php">
                                            <input type="text" name="email" placeholder="Email Here..." required>
                                            <button type="submit" name="button">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="row">
                            <div class="col-md-12 padding-fix-l20">
                                <div class="ftr-product">
                                    <div class="tab-box d-flex justify-content-between">
                                        <div class="sec-title">
                                            <h5>Feature Product</h5>
                                        </div>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#all">All</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#elec">Electronics</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#smart">Smartphones</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#shoe">Shoes</a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="all" role="tabpanel">
                                            <div class="tab-slider owl-carousel">

                                            <?php
                                            $select = $connect -> query("SELECT * FROM products");
                                            
                                            foreach($select as $pro){
                                                $prd_id = $pro['cat_id'];
                                                $select_c = $connect -> query("SELECT * FROM category WHERE id = '$prd_id'");
                                                $cat_details = $select_c -> fetch_assoc();
                                                $cat = $cat_details['name'];
                                                
                                                ?>


                                                
                                            <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item" ><a href="04-category.php?id=<?php echo$pro['id'] ?>" target="_blank" ><?php echo$cat ?></a></li>
                                                            <!-- <li class="list-inline-item"><a href="#">Smart Led</a></li> -->
                                                        </ul>
                                                        <p><a href="05-single-product.php?id=<?php echo$pro['id'] ?>"><?php echo$pro['name'] ?></a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                    <img width="150" class="main-img img-fluid" src="admin/image/<?php $arr=explode("/",$pro['img']); echo$arr[0]; ?>" alt="">


                                                        <img width="150" class="sec-img img-fluid" src="admin/image/<?php $arr=explode("/",$pro['img']); echo$arr[1]; ?>" alt="">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i <?php if($pro['rate'] > 0){ echo "class='fa fa-star'";}else{echo "class='fa fa-star-o'";} ?>></i></li>
                                                                <li class="list-inline-item"><i <?php if($pro['rate'] > 1){ echo "class='fa fa-star'";}else{echo "class='fa fa-star-o'";} ?>></i></li>
                                                                <li class="list-inline-item"><i <?php if($pro['rate'] > 2){ echo "class='fa fa-star'";}else{echo "class='fa fa-star-o'";} ?>></i></li>
                                                                <li class="list-inline-item"><i <?php if($pro['rate'] > 3){ echo "class='fa fa-star'";}else{echo "class='fa fa-star-o'";} ?>></i></li>
                                                                <li class="list-inline-item"><i <?php if($pro['rate'] > 4){ echo "class='fa fa-star'";}else{echo "class='fa fa-star-o'";} ?>></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$<?php echo$pro['price'] - $pro['sale'] ?></li>
                                                                <li class="list-inline-item">$<?php  echo$pro['price']?></li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                             <?php } ?>

                                            

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 padding-fix-l20">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="banner">
                                            <a href="04-category.php?id=15" target="_blank"><img src="images/banner-1.png" alt="" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="banner">
                                            <a href="04-category.php?id=16" target="_blank"><img src="images/banner-2.png" alt="" class="img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="new-product">
                                    <div class="sec-title">

                                  
                                    
                                        <h5>Upcoming Products  <span class="spinner-grow text-danger"></span> </h5>
                                        
                                    </div>
                                    <div class="new-slider owl-carousel">
                                        <?php
                                            $select_u = $connect -> query("SELECT * FROM products WHERE upcoming = 'new'");
                                            foreach($select_u as $row_u):
                                                $details = $row_u['cat_id'];
                                                $select_ca = $connect -> query("SELECT * FROM category WHERE id = '$details'");
                                                $cat_u = $select_ca -> fetch_assoc();
                                        ?>
                                        <div class="new-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#"><?php echo$cat_u['name'] ?></a></li>
                                                    <li class="list-inline-item"><a href="#"></a></li>
                                                </ul>
                                                <p><a href="#"><?php echo$row_u['name'] ?></a></p>
                                            </div>
                                            <div class="new-img">
                                                <img class="main-img img-fluid" src="admin/image/<?php echo$row_u['img'] ?>" alt="">
                                                <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                <div class="layer-box">
                                                    <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                    <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <!-- <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul> -->
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$<?php echo$row_u['price'] - $row_u['sale']?></li>
                                                        <li class="list-inline-item">$<?php echo$row_u['sale'] ?></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="#"  data-toggle="tooltip" data-placement="top" title="Add to Cart" disabled><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                                <?php endforeach ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="banner-two">
                                    <a href="#"><img src="images/banner-3.png" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="top-slr">
                                    <div class="sec-title">
                                        <h5>Top Seller</h5>
                                    </div>
                                    <div class="slr-slider owl-carousel">
                                        <div class="slr-items">
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-6.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-7.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-8.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slr-items">
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-9.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-10.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-11.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slr-items">
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-12.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-13.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-14.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slr-items">
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-6.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-4.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-2.png" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="hm-blog">
                                    <div class="sec-title">


                                        <h5>Latest News</h5>
                                    </div>
                                    <div class="blog-slider owl-carousel">

                                    
                                    <?php
                                        $select_n = $connect -> query("SELECT * FROM blog");
                                        foreach($select_n as $row_n){
                                            ?>

                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a><img src="admin/image/<?php echo$row_n['img'] ?>" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a><?php echo$row_n['title'] ?></a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#"><?php echo$row_n['publisher'] ?></a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i><?php echo$row_n['date'] ?></li>
                                                </ul>
                                                <p><?php echo$row_n['description'] ?></p>
                                                
                                            </div>
                                        </div>
                                        

                                        <?php } ?>

                                        
                                        <!-- <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="#"><img src="images/news-2.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a href="#">Sint eius inventore magni quod.</a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#">John</a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Mar, 2020</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                            </div>
                                        </div>

                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="#"><img src="images/news-3.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a href="#">Sint eius inventore magni quod.</a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#">John</a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Jan, 2020</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                            </div>
                                        </div>
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="#"><img src="images/news-4.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a href="#">Sint eius inventore magni quod.</a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#">John</a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Feb, 2020</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tp-bnd owl-carousel">
                            <div class="bnd-items">
                                <a href="#"><img src="images/samsung.png" alt="" class="img-fluid"></a>
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
        <!-- End Product Area -->

        <?php
            include "design/footer.php";
        ?>


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

        <script>

            $(document).ready(function(){
                $(".btn-search").keyup(function(){
                    let search = $(this).val();
                    
                    $.post("admin/function/search.php",{x_search:search},function(data){
                        $(".out_search").html(data)
                    })
                })
            });

            $(document).ready(function(){
                $(".x_delete").click(function(){
                    var client_id = $(this).attr("client_id"),
                    prod_id = $(this).attr("prod_id")
                    $.post("admin/function/delete_cart.php",{
                        x_prod : prod_id,
                        x_client : client_id
                    },function(data){
                        // alert(data)
                        
                        
                    })
                });

                



            })

            


            
            </script>




    </body>

<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 22:15:25 GMT -->
</html>


