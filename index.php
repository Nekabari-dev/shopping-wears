<!doctype html>
<html lang="en">
<head>
<title>Home</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="20x20">

<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

<link rel="stylesheet" href="assets/css/jquery-ui.css">

<link rel="stylesheet" href="assets/css/swiper.css">

<link rel="stylesheet" href="assets/font/flaticon.css">

<link rel="stylesheet" href="assets/css/bootstrap-icons.css">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

<!-- include statemant -->
 <?php include 'index_code.php';
 
 if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // echo "ID not found in the URL";
}

 ?>

<div class="mobil-sidebar d-sm-none">
<ul class="mobil-sidebar-icons">
<li class="category-icon"><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-menu"></i></a></li>
<li><a href="dashboard.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-user"></i></a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a></li>
<li class="cart-icon">
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
<div class="cart-count"><span>10</span></div>
</li>
</ul>
</div>


<div class="category-sidebar">
<div class="category-sidebar-wrapper ">
<div class="category-seidebar-top">
<h4>All category</h4>
<div class="category-close">
<i class="flaticon-arrow-pointing-to-left"></i>
</div>
</div>
<div class="accordion" id="categoryExample">
<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading1">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoryOne" aria-expanded="false" aria-controls="categoryOne">
<i class="flaticon-woman"></i> Woman Collection
</button>
</h2>
<div id="categoryOne" class="accordion-collapse collapse" aria-labelledby="categoryHeading1" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading2">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoryTwo" aria-expanded="false" aria-controls="categoryTwo">
<i class="flaticon-children"></i> Kid’s Collection
</button>
</h2>
<div id="categoryTwo" class="accordion-collapse collapse" aria-labelledby="categoryHeading2" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading3">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoryThree" aria-expanded="false" aria-controls="categoryThree">
<i class="flaticon-cosmetics"></i> Health & Beauty
</button>
</h2>
<div id="categoryThree" class="accordion-collapse collapse" aria-labelledby="categoryHeading3" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading4">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoryFour" aria-expanded="false" aria-controls="categoryFour">
<i class="flaticon-man"></i> Mens’s Collection
</button>
</h2>
<div id="categoryFour" class="accordion-collapse collapse" aria-labelledby="categoryHeading4" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading5">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoryFive" aria-expanded="false" aria-controls="categoryFive">
<i class="flaticon-necklace"></i> Women’s Jewellerty
</button>
</h2>
<div id="categoryFive" class="accordion-collapse collapse" aria-labelledby="categoryHeading5" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading6">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categorySix" aria-expanded="false" aria-controls="categorySix">
<i class="flaticon-shoes"></i> Shoes Collection
</button>
</h2>
<div id="categorySix" class="accordion-collapse collapse" aria-labelledby="categoryHeading6" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading7">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categorySeven" aria-expanded="false" aria-controls="categorySeven">
<i class="flaticon-watch"></i> Men’s & Woman’s Watches
</button>
</h2>
<div id="categorySeven" class="accordion-collapse collapse" aria-labelledby="categoryHeading7" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading8">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoryEight" aria-expanded="false" aria-controls="categoryEight">
<i class="flaticon-sports"></i> Seasonal Wear
</button>
</h2>
<div id="categoryEight" class="accordion-collapse collapse" aria-labelledby="categoryHeading8" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading9">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoryNine" aria-expanded="false" aria-controls="categoryNine">
<i class="flaticon-diamond"></i> Daimond
</button>
</h2>
<div id="categoryNine" class="accordion-collapse collapse" aria-labelledby="categoryHeading9" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="main-searchbar">
<div class="searchbar-wrap">
<div class="container">
<form method="POST" class="main-searchbar-form">
<h5>What are you lookking for?</h5>
<div class="searchbar-input">
<div class="input-wrap w-100 position-relative">
<input required name="search" type="text" placeholder="Search Products, Category, Brands....">
</div>
<div class="search-close"><i class="flaticon-close"></i></div>
</div>
</form>
</div>
</div>
</div>


<div class="cart-sidebar-wrappper">
<div class="main-cart-sidebar">
<div class="cart-top">
<div class="cart-close-icon">
<i class="flaticon-letter-x"></i>
</div>
<ul class="cart-product-grid">
<li class="single-cart-product">
<div class="cart-product-info d-flex align-items-center">
<div class="product-img"><img src="assets/images/product/cart-p1.png" alt class="img-fluid"></div>
<div class="product-info">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><h5 class="product-title">Men Casual Summer Sale</h5></a>
<ul class="product-rating d-flex">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star"></i></li>
</ul>
<p class="product-price"><span>1</span>x <span class="p-price">$10.32</span>
</p>
</div>
</div>
<div class="cart-product-delete-btn">
<a href="javascript:void(0)"><i class="flaticon-letter-x"></i></a>
</div>
</li>
<li class="single-cart-product">
<div class="cart-product-info d-flex align-items-center">
<div class="product-img"><img src="assets/images/product/cart-p3.png" alt class="img-fluid"></div>
<div class="product-info">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><h5 class="product-title">Something Yellow Jens</h5></a>
<ul class="product-rating d-flex">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star"></i></li>
</ul>
<p class="product-price"><span>1</span>x <span class="p-price">$10.32</span>
</p>
</div>
</div>
<div class="cart-product-delete-btn">
<a href="javascript:void(0)"><i class="flaticon-letter-x"></i></a>
</div>
</li>
<li class="single-cart-product">
<div class="cart-product-info d-flex align-items-center">
<div class="product-img"><img src="assets/images/product/cart-p2.png" alt class="img-fluid"></div>
<div class="product-info">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><h5 class="product-title">Woman Something Navy Top</h5></a>
<ul class="product-rating d-flex">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star"></i></li>
</ul>
<p class="product-price"><span>1</span>x <span class="p-price">$10.32</span>
</p>
</div>
</div>
<div class="cart-product-delete-btn">
<a href="javascript:void(0)"><i class="flaticon-letter-x"></i></a>
</div>
</li>
</ul>
</div>
<div class="cart-bottom">
<div class="cart-total d-flex justify-content-between">
<label>Subtotal :</label>
<span>$64.08</span>
</div>
<div class="cart-btns">
<a href="checkout.php?id=<?php if(isset($id)) echo $id; ?>" class="cart-btn checkout">CHECKOUT</a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>" class="cart-btn cart">VIEW CART</a>
</div>
<p class="cart-shipping-text"><strong>SHIPPING:</strong> Continue shopping up to $64.08 and receive free
shipping. stay with EG </p>
</div>
</div>
</div>


<header>
<div class="header-area">
<div class="container">
<div class="row">
<div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="logo d-flex justify-content-between align-items-center h-100">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/logo.png" alt="logo"></a>
<div class="mobile-menu d-flex ">
<ul class="d-flex mobil-nav-icons align-items-center">
<li class="search-icon global-top"><a href="javascript:void(0)"><i class="flaticon-search-1"></i></a></li>
<li><a href="dashboard.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-user"></i></a></li>
<li class="category-icon"><a href="javascript:void(0)"><i class="flaticon-menu"></i></a></li>
<li class="cart-icon"><a href="javascript:void(0)"><i class="flaticon-shopping-cart"></i></a>
<div class="has-count">12</div>
</li>
</ul>
<a href="javascript:void(0)" class="hamburger d-block d-xl-none">
<span class="h-top"></span>
<span class="h-middle"></span>
<span class="h-bottom"></span>
</a>
</div>
</div>
</div>
<div class="col-xl-7 col-lg-8 col-md-8 col-sm-6 col-xs-6">
<nav class="main-nav">
<div class="inner-logo d-xl-none">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/logo.png" alt>
</a>
</div>
<ul>
<!-- <li class="has-child-menu"> -->
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>">Home</a></li>
<!-- <i class="fl flaticon-plus">+</i> -->
<!-- <ul class="sub-menu"> -->
<!-- <li><a href="https://demo-egenslab.b-cdn.net/html/eg-shop-fashion/v1/index.php">EG Shop Fashion 1</a></li>
<li><a href="https://demo-egenslab.b-cdn.net/html/eg-shop-fashion/v2/index.php">EG Shop Fashion 2</a></li> -->
<!-- <li><a href="index.php">Home</a></li> -->
<!-- </ul> -->
<!-- </li> -->
<li><a href="about.php?id=<?php if(isset($id)) echo $id; ?>">About Us</a></li>
<li class="has-child-menu">
<a href="javascript:void(0)">Shop</a>
<i class="fl flaticon-plus">+</i>
<ul class="sub-menu">
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Shop</a></li>
<li><a href="product-sidebar.php?id=<?php if(isset($id)) echo $id; ?>">Shop Sidebar</a></li>
<li><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Shop Details</a></li>
</ul>
</li>
<li class="has-child-menu">
<a href="javascript:void(0)">Pages</a>
<i class="fl flaticon-plus">+</i>
<ul class="sub-menu">
<li><a href="cart.php?id=<?php if(isset($id)) echo $id; ?>">Cart</a></li>
<li><a href="checkout.php?id=<?php if(isset($id)) echo $id; ?>">Checkout</a></li>
<li><a href="login.php?id=<?php if(isset($id)) echo $id; ?>">Login</a></li>
<li><a href="register.php?id=<?php if(isset($id)) echo $id; ?>">Register</a></li>
<li><a href="dashboard.php?id=<?php if(isset($id)) echo $id; ?>">Dashboard</a></li>
<li><a href="profile.php?id=<?php if(isset($id)) echo $id; ?>">Profile</a></li>
<li><a href="order.php?id=<?php if(isset($id)) echo $id; ?>">Orders</a></li>
<li><a href="setting.php?id=<?php if(isset($id)) echo $id; ?>">Setting</a></li>
<li><a href="comming-soon.php?id=<?php if(isset($id)) echo $id; ?>">Comming Soon</a></li>
<li><a href="faq.php?id=<?php if(isset($id)) echo $id; ?>">FAQ</a></li>
<!-- <li><a href="404.php">404</a></li> -->
</ul>
</li>
<li class="has-child-menu">
<a href="javascript:void(0)">Blog</a>
<i class="fl flaticon-plus">+</i>
<ul class="sub-menu">
<li><a href="blog.php?id=<?php if(isset($id)) echo $id; ?>">Blog Grid</a></li>
<li><a href="blog-sidebar.php?id=<?php if(isset($id)) echo $id; ?>">Blog Sidebar</a></li>
<li><a href="blog-standard.php?id=<?php if(isset($id)) echo $id; ?>">Blog Standard</a></li>
<li><a href="blog-details.php?id=<?php if(isset($id)) echo $id; ?>">Blog Details</a></li>
</ul>
</li>
<li><a href="contact.php?id=<?php if(isset($id)) echo $id; ?>">Contact Us</a></li>
</ul>
<ul class="inner-social-icons d-xl-none d-flex flex-wrap">
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-facebook-app-symbol"></i></a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-twitter-1"></i></a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-instagram-2"></i></a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-pinterest-1"></i></a></li>
</ul>
</nav>
</div>
<div class="col-xl-3 col-2 d-none d-xl-block">
<div class="nav-right h-100 d-flex align-items-center justify-content-end">
<ul class="d-flex nav-icons">
<li class="search-icon"><a href="javascript:void(0)"><i class="flaticon-search-1"></i></a></li>
<li><a href="dashboard.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-user"></i></a></li>
<li class="category-icon"><a href="javascript:void(0)"><i class="flaticon-menu"></i></a></li>
<li class="cart-icon"><a href="javascript:void(0)"><i class="flaticon-shopping-cart"></i></a>
<div class="has-count">0</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</header>


<div class="hero-area position-relative">
<div class="swiper-container hero-slider">
<div class="swiper-wrapper">
<div class="swiper-slide hero-slide-item">
<div class="container">
<div class="row d-flex align-items-center">
<div class="col-lg-6">
<div class="slide-item-content">
<h5>Get Up to 30%OFF</h5>
<h2 class="slide-item-title">Unlock Your Style With EG FASHION</h2>
<p>Various versions have evolved over the years, sometimes by acciden some times on purpose words which.</p>
<div class="slide-item-btn">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>" class="primary-btn-xl">Shop Now</a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="slide-item-figure d-flex justify-content-lg-end">
<img src="assets/images/hero/banner-figure11.png" alt class="img-fluid figure">
<div class="florting-figure">
<img src="assets/images/hero/florting-figure-1.png" alt>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide hero-slide-item">
<div class="container">
<div class="row d-flex align-items-center">
<div class="col-lg-6">
<div class="slide-item-content">
<h5>Get Up to 30%OFF</h5>
<h2 class="slide-item-title">Unlock Your Style With EG FASHION</h2>
<p>Various versions have evolved over the years, sometimes by acciden some times on purpose words which.</p>
<div class="slide-item-btn">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>" class="primary-btn-xl">Shop Now</a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="slide-item-figure d-flex justify-content-lg-end">
<img src="assets/images/hero/banner-figure22.png" alt class="img-fluid figure">
<div class="florting-figure">
<img src="assets/images/hero/florting-figure-2.png" alt>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="hero-btns">
<div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="flaticon-right-arrow-2"></i></div>
<div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="flaticon-left-arrow"></i></div>
</div>
</div>


<div class="banner-md-area">
<div class="container-fluid p-0">
<div class="banner-grid">
<div class="single-grid single-grid1 pl-0">
<div class="single-banner-md single-banner-md1 h-100 ">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/banner/banner-md1.png" alt></a>
<div class="banner-overlay end-0">
<div class="banner-content text-end">
<h4>Smart Watch <br> Collection</h4>
<div class="banner-btn"><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Shop Now</a></div>
</div>
</div>
</div>
</div>
<div class="single-grid single-grid2">
<div class="single-banner-md single-banner-md2 h-100">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/banner/banner-md2.png" alt></a>
<div class="banner-overlay2 justify-content-center">
<div class="banner-content text-center">
<h4>Woman’s Summer <br> Sale is Here</h4>
<div class="banner-btn"><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Shop Now</a></div>
</div>
</div>
</div>
</div>
<div class="single-grid single-grid3 pr-0">
<div class="single-banner-md single-banner-md3 h-100">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/banner/banner-md3.png" alt></a>
<div class="banner-overlay">
<div class="banner-content">
<h4>Short T-Shirt for <br> Woman</h4>
<div class="banner-btn"><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Shop Now</a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="feature-area mt-96">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="feature-card">
<div class="feature-vactor position-absolute">
<img src="assets/images/shapes/feature-line-vactor.png" alt>
</div>
<div class="feature-icon">
<i class="flaticon-delivery"></i>
</div>
<h5>Fast Free Shipping</h5>
<p>Around the world</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="feature-card">
<div class="feature-vactor position-absolute">
<img src="assets/images/shapes/feature-line-vactor.png" alt>
</div>
<div class="feature-icon">
<i class="flaticon-headphones"></i>
</div>
<h5>24/7 Supports</h5>
<p>Contact us 24 hours</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="feature-card">
<div class="feature-vactor position-absolute">
<img src="assets/images/shapes/feature-line-vactor.png" alt>
</div>
<div class="feature-icon">
<i class="flaticon-money-1"></i>
</div>
<h5>100% Money Back</h5>
<p>Guarantee of money retun</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="feature-card">
<div class="feature-vactor position-absolute">
<img src="assets/images/shapes/feature-line-vactor.png" alt>
</div>
<div class="feature-icon">
<i class="flaticon-credit-card"></i>
</div>
<h5>100% Secure Payment</h5>
<p>Your payments are safe.</p>
</div>
</div>
</div>
</div>
</div>


<div class="product-area mt-110">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>NEW PRODUCTS</h2>
<p>Exclusive products have just arrived. Check them out</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="product-tab-buttons">
<ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">New Trendy</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">New Arrival</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Best Seller</button>
</li>
</ul>
</div>
</div>
<div class="col-lg-12">
<div class="tab-content product-tab" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
<div class="row">
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md1.png" alt>
</a>
<div class="product-lavels">
<span class="sale">sale</span>
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
<input type="radio" name="color" id="color1" value="red" checked>
<label for="color1"><span class="c1 p-color"></span></label>
<input type="radio" name="color" id="color2" value="red">
<label for="color2"><span class="c2 p-color"></span></label>
<input type="radio" name="color" id="color4" value="red">
<label for="color4"><span class="c4 p-color"></span></label>
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Atom-SL-Hoody-Elysium-Front</a> </h5>
<div class="product-price">
<del class="old-price">$32.74</del><ins class="new-price">$29.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md2.png" alt>
</a>
<div class="product-lavels">
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Alroy-Short-7-Women-s-Fortune</a> </h5>
<div class="product-price">
<ins class="new-price">$20.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md3.png" alt>
</a>
<div class="product-lavels">
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Beta-LT-Jacket-Phantasm-Front</a> </h5>
<div class="product-price">
<ins class="new-price">$87.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md4.png" alt>
</a>
<div class="product-lavels">
<span class="discount">-10%</span>
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Womens Vintage Straight Deni</a> </h5>
<div class="product-price">
<ins class="new-price">$190.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md5.png" alt>
</a>
<div class="product-lavels">
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Konseal-Pant-Black-Back</a> </h5>
<div class="product-price">
<del class="old-price">$32.74</del><ins class="new-price">$29.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md6.png" alt>
</a>
<div class="product-lavels">
<span class="sale">sale</span>
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Atom-SL-Hoody-Elysium-Front</a> </h5>
<div class="product-price">
<ins class="new-price">$20.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md7.png" alt>
</a>
<div class="product-lavels">
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Motus-AR-Hoody-Women</a> </h5>
<div class="product-price">
<ins class="new-price">$87.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md8.png" alt>
</a>
<div class="product-lavels">
<span class="discount">-15%</span>
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Remige-Shirt-LS-Cryptochrome</a> </h5>
<div class="product-price">
<ins class="new-price">$190.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="row">
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md1.png" alt>
</a>
<div class="product-lavels">
<span class="sale">sale</span>
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Atom-SL-Hoody-Elysium-Front</a> </h5>
<div class="product-price">
<del class="old-price">$32.74</del><ins class="new-price">$29.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md2.png" alt>
</a>
<div class="product-lavels">
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Alroy-Short-7-Women-s-Fortune</a> </h5>
<div class="product-price">
<ins class="new-price">$20.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md3.png" alt>
</a>
<div class="product-lavels">
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Beta-LT-Jacket-Phantasm-Front</a> </h5>
<div class="product-price">
<ins class="new-price">$87.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md4.png" alt>
</a>
<div class="product-lavels">
<span class="discount">-10%</span>
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Womens Vintage Straight Deni</a> </h5>
<div class="product-price">
<ins class="new-price">$190.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md5.png" alt>
</a>
<div class="product-lavels">
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Konseal-Pant-Black-Back</a> </h5>
<div class="product-price">
<del class="old-price">$32.74</del><ins class="new-price">$29.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md6.png" alt>
</a>
<div class="product-lavels">
<span class="sale">sale</span>
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Atom-SL-Hoody-Elysium-Front</a> </h5>
<div class="product-price">
<ins class="new-price">$20.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
<div class="row">
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md1.png" alt>
</a>
<div class="product-lavels">
<span class="sale">sale</span>
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Atom-SL-Hoody-Elysium-Front</a> </h5>
<div class="product-price">
<del class="old-price">$32.74</del><ins class="new-price">$29.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md2.png" alt>
</a>
<div class="product-lavels">
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Alroy-Short-7-Women-s-Fortune</a> </h5>
<div class="product-price">
<ins class="new-price">$20.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md3.png" alt>
</a>
<div class="product-lavels">
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Beta-LT-Jacket-Phantasm-Front</a> </h5>
<div class="product-price">
<ins class="new-price">$87.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md4.png" alt>
</a>
<div class="product-lavels">
<span class="discount">-10%</span>
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Womens Vintage Straight Deni</a> </h5>
<div class="product-price">
<ins class="new-price">$190.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md5.png" alt>
</a>
<div class="product-lavels">
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Konseal-Pant-Black-Back</a> </h5>
<div class="product-price">
<del class="old-price">$32.74</del><ins class="new-price">$29.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md6.png" alt>
</a>
<div class="product-lavels">
<span class="sale">sale</span>
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Atom-SL-Hoody-Elysium-Front</a> </h5>
<div class="product-price">
<ins class="new-price">$20.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="product-card-m">
<div class="product-thumb">
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">
<img src="assets/images/product/p-md7.png" alt>
</a>
<div class="product-lavels">
</div>
<div class="add-product"><a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-plus"></i></a></div>
<div class="color-option">
</div>
</div>
<div class="product-body">
<h5 class="product-title"> <a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>">Motus-AR-Hoody-Women</a> </h5>
<div class="product-price">
<ins class="new-price">$87.05</ins>
</div>
<div class="product-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-heart"></i></a>
<a href="product-details.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-search"></i></a>
<a href="cart.php?id=<?php if(isset($id)) echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="wide-banner-area mt-120">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="offer-container swiper-container position-relative">
<div class="swiper-wrapper">
<div class="single-offer swiper-slide">
<h5>New Season Only $50</h5>
<h2>Exclusive Collection For Women’s</h2>
<div class="offer-countdown" id="timer">
<div class="countdown-box">
<h3 id="days">...</h3>
<h5>DAYS</h5>
</div>
<div class="countdown-box">
<h3 id="hours">...</h3>
<h5>HOURS</h5>
</div>
<div class="countdown-box">
<h3 id="minutes">...</h3>
<h5>MINS</h5>
</div>
<div class="countdown-box">
<h3 id="seconds">...</h3>
<h5>SECS</h5>
</div>
</div>
<div class="offer-details-btn">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>" class="primary-btn-l">View Details</a>
</div>
</div>
<div class="single-offer swiper-slide">
<h5>New Season Only $50</h5>
<h2>Exclusive Collection For Kid's</h2>
<div class="offer-countdown">
<div class="countdown-box">
<h3>50</h3>
<h5>DAYS</h5>
</div>
<div class="countdown-box">
<h3>25</h3>
<h5>HOURS</h5>
</div>
<div class="countdown-box">
<h3>40</h3>
<h5>MINS</h5>
</div>
<div class="countdown-box">
<h3>30</h3>
<h5>SECS</h5>
</div>
</div>
<div class="offer-details-btn">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>" class="primary-btn-l">View Details</a>
</div>
</div>
</div>

<div class="offer-btns">
<div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="flaticon-left-arrow"></i></div>
<div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="flaticon-right-arrow-2"></i></div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="blog-area-start mt-110">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>LATEST NEWS !</h2>
<p>Exclusive products have just arrived. Check them out</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="blog-card">
<div class="blog-thumb">
<a href="blog-details.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/blog/b-1.png" alt></a>
<div class="blog-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-share"></i></a>
</div>
</div>
<div class="blog-content">
<div class="blog-top">
<div class="blog-tags">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Fashion Style</a>
</div>
<div class="fav-icon"><i class="flaticon-heart"></i></div>
</div>
<h3 class="blog-title"><a href="blog-details.php?id=<?php if(isset($id)) echo $id; ?>">11 Outfit Trends we Spotted All over Street style</a></h3>
<div class="blog-bottom">
<div class="blog-writer-link"><i class="flaticon-user"></i> <a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Johan Martin <span>-8th Jan 2021</span></a></div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="blog-card">
<div class="blog-thumb">
<a href="blog-details.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/blog/b-2.png" alt></a>
<div class="blog-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-share"></i></a>
</div>
</div>
<div class="blog-content">
<div class="blog-top">
<div class="blog-tags">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Life Style</a>
</div>
<div class="fav-icon"><i class="flaticon-heart"></i></div>
</div>
<h3 class="blog-title"><a href="blog-details.php?id=<?php if(isset($id)) echo $id; ?>">Finding a catchy fashion blog name isn’t exactly an.</a></h3>
<div class="blog-bottom">
<div class="blog-writer-link"><i class="flaticon-user"></i> <a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Johan Martin <span>-8th Jan 2021</span></a></div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="blog-card">
<div class="blog-thumb">
<a href="blog-details.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/blog/b-3.png" alt></a>
<div class="blog-actions">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-share"></i></a>
</div>
</div>
<div class="blog-content">
<div class="blog-top">
<div class="blog-tags">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Fashion Diary</a>
</div>
<div class="fav-icon"><i class="flaticon-heart"></i></div>
</div>
<h3 class="blog-title"><a href="blog-details.php?id=<?php if(isset($id)) echo $id; ?>">Coming up with catchy blog name can be a challenge,</a></h3>
<div class="blog-bottom">
<div class="blog-writer-link"><i class="flaticon-user"></i> <a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Johan Martin <span>-8th Jan 2021</span></a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="sponsor-logo-area mt-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-symbols-3"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-massachusetts-institute-of-technology-logotype"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-my-life-social-logo"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-stanford-university-logo"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-club-dante-social-logotype"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-funny-or-die-logo"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-tuenti-social-logo"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-ning-social-logo"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-gather-logo"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-inside-the-hotel-logotype"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-virus-total-text-logo"></i></a>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-6">
<div class="single-logo">
<a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-blogbus-logo"></i></a>
</div>
</div>
</div>
</div>
</div>


<div class="banner-grid mt-70">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>TOP SALE THIS WEEK</h2>
<p>Exclusive products have just arrived. Check them out</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mt-24">
<div class="single-banner-grid">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/banner/ban-xxl.png" alt></a>
<div class="banner-grid-overlay">
<div class="banner-grid-content">
<h4>Pink Collection Woman’s <br>Shoes 2021</h4>
<div class="banner-grid-btn">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>">View All</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="row h-50">
<div class="col-lg-8 col-md-7 mt-24">
<div class="single-banner-grid">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/banner/ban-m.png" alt></a>
<div class="banner-grid-overlay">
<div class="banner-grid-content">
<h4>Warmly Heart Feet Lovely<br> Watch 2021</h4>
<div class="banner-grid-btn">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>">View All</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-5 mt-24">
<div class="single-banner-grid">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/banner/ban-sm.png" alt></a>
<div class="banner-grid-overlay2">
<div class="banner-grid-content">
<h4>Heart Lovely Diamond </h4>
<div class="banner-grid-btn">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>">View All</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row h-50">
<div class="col-lg-4 col-md-5 mt-24">
<div class="single-banner-grid">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/banner/ban-sm2.png" alt></a>
<div class="banner-grid-overlay2">
<div class="banner-grid-content">
<h4>Summer Urban Dress</h4>
<div class="banner-grid-btn">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>">View All</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-8 col-md-7 mt-24">
<div class="single-banner-grid">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>"><img src="assets/images/banner/ban-m2.png" alt></a>
<div class="banner-grid-overlay">
<div class="banner-grid-content">
<h4>Men’s Casual <br>Summer Sale 2021</h4>
<div class="banner-grid-btn">
<a href="product.php?id=<?php if(isset($id)) echo $id; ?>">View All</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="footer-area mt-120">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="row">
<div class="col-lg-4">
<div class="footer-about">
<div class="footer-logo">
<img src="assets/images/logo.png" alt>
</div>
<p>A high-quality clothing and fas- hion brand Lorem ipsum dolor sit amet, cons</p>
<ul class="footer-contact-list">
<li>
<div class="contact-icon"><i class="flaticon-phone-call"></i></div>
<div class="contact-list">
<a href="tel:+880170000000">+880 170 000 0000</a>
<a href="tel:+880170000000">+880 170 000 0000</a>
</div>
</li>
<li>
<div class="contact-icon"><i class="flaticon-envelope"></i></div>
<div class="contact-list">
<a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#adc4c3cbc2edc8d5ccc0ddc1c883cec2c0"><span class="__cf_email__" data-cfemail="147d7a727b54716c75796478713a777b79">[email&#160;protected]</span></a>
<a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#89e0e7efe6c9fafcf9f9e6fbfda7eae6e4"><span class="__cf_email__" data-cfemail="50393e363f10232520203f22247e333f3d">[email&#160;protected]</span></a>
</div>
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6 d-flex justify-content-lg-center">
<div class="footer-widget">
<h5 class="footer-widget-title">
Important Links
</h5>
<div class="footer-links">
<ul class="link-list">
<li><a href="about.php?id=<?php if(isset($id)) echo $id; ?>">About Eg Store</a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Privacy Policy</a> </li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Terms & Conditions</a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Our Support</a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Terms & Service</a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Payment Policy</a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 d-flex justify-content-lg-center">
<div class="footer-widget">
<h5 class="footer-widget-title">
Category
</h5>
<div class="footer-links">
<ul class="link-list">
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Woman</a></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Men’s</a> </li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Winter Sale</a></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Summer Sale</a></li>
<li><a href="product.php?id=<?php if(isset($id)) echo $id; ?>">Other</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="footer-widget">
<h5 class="footer-widget-title">
Our Newsletter
</h5>
<div class="footer-newslatter">
<p>Get the latest discount & offers. Subscribe today. Don’t miss the deals!</p>
<form method="POST" id="footer-newslatter">
<div class="newslatter-wrap">
<input type="text" placeholder="Your Email" name="email" required>
<button type="submit" name="send">Send</button>
</div>
</form>
</div>
<ul class="footer-social-links d-flex">
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-facebook-app-symbol"></i></a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-pinterest-1"></i></a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-linkedin"></i></a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-instagram-2"></i></a></li>
<li><a href="index.php?id=<?php if(isset($id)) echo $id; ?>#"><i class="flaticon-twitter-1"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="footer-bottom row align-items-center">
<div class="col-lg-6 ">
<div class="footer-copyring"> <p>Copyright 2021 EG Shop Fashion | Design By <a href="index.php?id=<?php if(isset($id)) echo $id; ?>#">Egens Lab</a></p> </div>
</div>
<div class="col-lg-6">
<ul class="payment-cards d-flex justify-content-lg-end">
<li><img src="assets/images/payment/payment-master.png" alt></li>
<li><img src="assets/images/payment/payment-visa.png" alt></li>
<li><img src="assets/images/payment/payment-master.png" alt></li>
<li><img src="assets/images/payment/payment-visa.png" alt></li>
</ul>
</div>
</div>
</div>
</div>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/swiper.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>

<script src="assets/js/main.js"></script>
</body>
</html>