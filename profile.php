<!doctype html>
<html lang="en">
<head>
<title>Profile</title>

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
<?php 
include 'profile_code.php';
include 'adding.php';

 if(isset($_GET['id'])) {
     $id = $_GET['id'];
 } else {
     // echo "ID not found in the URL";
 }

 $GLOBALS['id'] = $id;

?>


<div class="mobil-sidebar d-sm-none">
<ul class="mobil-sidebar-icons">
<li class="category-icon"><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-menu"></i></a></li>
<li><a href="dashboard.php?id=<?php echo $id; ?>"><i class="flaticon-user"></i></a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-heart"></i></a></li>
<li class="cart-icon">
<a href="cart.php?id=<?php echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
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
<li><a href="product.php?id=<?php echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
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
<li><a href="product.php?id=<?php echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
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
<li><a href="product.php?id=<?php echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
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
<li><a href="product.php?id=<?php echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
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
<li><a href="product.php?id=<?php echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
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
<li><a href="product.php?id=<?php echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
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
<li><a href="product.php?id=<?php echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
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
<li><a href="product.php?id=<?php echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
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
<li><a href="product.php?id=<?php echo $id; ?>">Man Casual Silk Shirt</a> <span class="product-amount">(10)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Man Orange Shorts</a> <span class="product-amount">(22)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">Party Dress</a> <span class="product-amount">(08)</span></li>
<li><a href="product.php?id=<?php echo $id; ?>">T-Shirt</a> <span class="product-amount">(41)</span> </li>
<li><a href="product.php?id=<?php echo $id; ?>">Ghost Mannequin Black Hoodie</a> <span class="product-amount">(15)</span></li>
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
<input name="search" required type="text" placeholder="Search Products, Category, Brands....">
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
<a href="product-details.php?id=<?php echo $id; ?>"><h5 class="product-title">Men Casual Summer Sale</h5></a>
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
<a href="product-details.php?id=<?php echo $id; ?>"><h5 class="product-title">Something Yellow Jens</h5></a>
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
<a href="product-details.php?id=<?php echo $id; ?>"><h5 class="product-title">Woman Something Navy Top</h5></a>
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
<a href="checkout.php?id=<?php echo $id; ?>" class="cart-btn checkout">CHECKOUT</a>
<a href="cart.php?id=<?php echo $id; ?>" class="cart-btn cart">VIEW CART</a>
</div>
<p class="cart-shipping-text"><strong>SHIPPING:</strong> Continue shopping up to $64.08 and receive free
shipping. stay with EG </p>
</div>
</div>
</div>


<header>
<div class="header-area" style="background-color: black;">
<div class="container">
<div class="row">
<div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="logo d-flex justify-content-between align-items-center h-100">
<a href="index.php?id=<?php echo $id; ?>"><img src="assets/images/logo.png" alt="logo"></a>
<div class="mobile-menu d-flex ">
<ul class="d-flex mobil-nav-icons align-items-center">
<li class="search-icon global-top"><a href="javascript:void(0)"><i class="flaticon-search-1"></i></a></li>
<li><a href="dashboard.php?id=<?php echo $id; ?>"><i class="flaticon-user"></i></a></li>
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
<a href="index.php?id=<?php echo $id; ?>">
<img src="assets/images/logo.png" alt>
</a>
</div>
<ul>
<!-- <li class="has-child-menu"> -->
<li><a href="index.php?id=<?php echo $id; ?>">Home</a></li>
<!-- <i class="fl flaticon-plus">+</i>
<ul class="sub-menu">
<li><a href="https://demo-egenslab.b-cdn.net/html/eg-shop-fashion/v1/index.php">EG Shop Fashion 1</a></li>
<li><a href="https://demo-egenslab.b-cdn.net/html/eg-shop-fashion/v2/index.php">EG Shop Fashion 2</a></li>
<li><a href="index.php">EG Shop Fashion 3</a></li>
</ul>
</li> -->
<li><a href="about.php?id=<?php echo $id; ?>">About Us</a></li>
<li class="has-child-menu">
<a href="javascript:void(0)">Shop</a>
<i class="fl flaticon-plus">+</i>
<ul class="sub-menu">
<li><a href="product.php?id=<?php echo $id; ?>">Shop</a></li>
<li><a href="product-sidebar.php?id=<?php echo $id; ?>">Shop Sidebar</a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>">Shop Details</a></li>
</ul>
</li>
<li class="has-child-menu">
<a href="javascript:void(0)" class="active">Pages</a>
<i class="fl flaticon-plus">+</i>
<ul class="sub-menu">
<li><a href="cart.php?id=<?php echo $id; ?>">Cart</a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>">Checkout</a></li>
<li><a href="login.php?id=<?php echo $id; ?>">Login</a></li>
<li><a href="register.php?id=<?php echo $id; ?>">Register</a></li>
<li><a href="dashboard.php?id=<?php echo $id; ?>">Dashboard</a></li>
<li><a href="profile.php?id=<?php echo $id; ?>">Profile</a></li>
<li><a href="order.php?id=<?php echo $id; ?>">Orders</a></li>
<li><a href="setting.php?id=<?php echo $id; ?>">Setting</a></li>
<li><a href="comming-soon.php?id=<?php echo $id; ?>">Comming Soon</a></li>
<li><a href="faq.php?id=<?php echo $id; ?>">FAQ</a></li>
<!-- <li><a href="404.php?id=<?php echo $id; ?>">404</a></li> -->
</ul>
</li>
<li class="has-child-menu">
<a href="javascript:void(0)">Blog</a>
<i class="fl flaticon-plus">+</i>
<ul class="sub-menu">
<li><a href="blog.php?id=<?php echo $id; ?>">Blog Grid</a></li>
<li><a href="blog-sidebar.php?id=<?php echo $id; ?>">Blog Sidebar</a></li>
<li><a href="blog-standard.php?id=<?php echo $id; ?>">Blog Standard</a></li>
<li><a href="blog-details.php?id=<?php echo $id; ?>">Blog Details</a></li>
</ul>
</li>
<li><a href="contact.php?id=<?php echo $id; ?>">Contact Us</a></li>
</ul>
<ul class="inner-social-icons d-xl-none d-flex flex-wrap">
<li><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-facebook-app-symbol"></i></a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-twitter-1"></i></a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-instagram-2"></i></a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-pinterest-1"></i></a></li>
</ul>
</nav>
</div>
<div class="col-xl-3 col-2 d-none d-xl-block">
<div class="nav-right h-100 d-flex align-items-center justify-content-end">
<ul class="d-flex nav-icons">
<li class="search-icon"><a href="javascript:void(0)"><i class="flaticon-search-1"></i></a></li>
<li><a href="dashboard.php?id=<?php echo $id; ?>"><i class="flaticon-user"></i></a></li>
<li class="category-icon"><a href="javascript:void(0)"><i class="flaticon-menu"></i></a></li>
<li class="cart-icon"><a href="javascript:void(0)"><i class="flaticon-shopping-cart"></i></a>
<div class="has-count"><?php if(isset($added_to_cart)) echo $added_to_cart; ?></div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</header>


<!-- <div class="breadcrumb-area">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-wrap">
<h3 class="page-title">My Account</h3>
<ul class="page-switcher">
<li><a href="index.php?id=<?php echo $id; ?>">Home <i class="bi bi-chevron-right"></i></a></li>
<li>My Account</li>
</ul>
</div>
</div>
</div>
</div>
</div> -->


<div class="dashbord-wrapper mt-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
<div class="dashbord-switcher">
<a href="dashboard.php?id=<?php echo $id; ?>"><i class="flaticon-dashboard"></i> Dashboard</a>
<a href="profile.php?id=<?php echo $id; ?>" class="active"><i class="flaticon-user"></i> My Profile</a>
<a href="order.php?id=<?php echo $id; ?>"><i class="flaticon-shopping-bag"></i> My Order</a>
<a href="setting.php?id=<?php echo $id; ?>"><i class="flaticon-settings"></i> Account Setting</a>
<a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-logout"></i> Logout</a>
</div>
</div>
<div class="col-xl-8 col-lg-8">
<div class="profile-form-wrapper">
<h5>Profile</h5>
<div class="profile-top">
<div class="user-image">
<img src="assets/images/profil-img.png" alt>
<div class="prifil-change-icon">
<i class="bi bi-camera"></i>
</div>
</div>
<div class="profile-top-btns">
<a href="profile.php?id=<?php echo $id; ?>#" class="upload">Upload</a>
<a href="profile.php?id=<?php echo $id; ?>#" class="remove">Remove</a>
</div>
</div>
<form method="POST" id="profile-form">
<div class="row">
<div class="col-lg-6">
<div class="eg-input-group">
<label for="fname">First Name*</label>
<input name="fname" type="text" id="fname" placeholder="Your first name" required>
</div>
</div>
<div class="col-lg-6">
<div class="eg-input-group">
<label for="lname">Last Name*</label>
<input name="lname" type="text" id="lname" placeholder="Your last name" required>
</div>
</div>
<div class="col-lg-12">
<div class="eg-input-group">
<label for="email">Email *</label>
<input name="email" type="email" id="email" placeholder="Your email" required>
</div>
</div>
<div class="col-lg-12">
<div class="eg-input-group">
<label for="Number">Contact Number *</label>
<input name="contact" type="tel" id="Number" required>
</div>
</div>
<div class="col-lg-12">
<div class="eg-input-group">
<label for="address">Address *</label>
<input name="address" type="text" id="address" required>
</div>
</div>
<div class="col-lg-6">
<div class="eg-input-group">
<label for="city">City *</label>
<select name="city" id="city">
<option selected>Cumilla</option>
<option value="1">Dhaka</option>
<option value="2">Khulna</option>
<option value="3">Bandarban</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="eg-input-group">
<label for="state">State *</label>
<select name="state" id="state">
<option selected>Cumilla</option>
<option value="1">Dhaka</option>
<option value="2">Khulna</option>
<option value="3">Bandarban</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="eg-input-group">
<label for="zip">Zip Code * </label>
<input name="zip_code" type="number" id="zip" required>
</div>
</div>
<div class="col-lg-6">
<div class="eg-input-group">
<label for="country">Country *</label>
<select name="country" id="country">
<option selected>Bangladesh</option>
<option value="1">Japan</option>
<option value="2">Australia</option>
<option value="3">Hawaii</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="eg-input-group">
<label for="password">Password *</label>
<input name="pword" type="password" id="password" placeholder="Enter a password" required>
</div>
</div>
<div class="col-lg-12">
<div class="eg-input-group">
<label for="sure-pass">Confirm Password *</label>
<input name="conf_pword" type="password" id="sure-pass" placeholder="Confirm password" required>
</div>
</div>
<div class="col-lg-12">
<div class="eg-input-group profile-form-sumbit reg-submit-input d-flex align-items-center">
<input name="create_prof" type="submit" id="submite-btn" value="Save Change">
</div>
</div>
</div>
</form>


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
<a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#9bf2f5fdf4dbfee3faf6ebf7feb5f8f4f6"><span class="__cf_email__" data-cfemail="0d64636b624d68756c607d6168236e6260">[email&#160;protected]</span></a>
<a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#30595e565f70434540405f42441e535f5d"><span class="__cf_email__" data-cfemail="f891969e97b88b8d8888978a8cd69b9795">[email&#160;protected]</span></a>
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
<li><a href="about.php?id=<?php echo $id; ?>">About Eg Store</a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#">Privacy Policy</a> </li>
<li><a href="profile.php?id=<?php echo $id; ?>#">Terms & Conditions</a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#">Our Support</a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#">Terms & Service</a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#">Payment Policy</a></li>
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
<li><a href="product.php?id=<?php echo $id; ?>">Woman</a></li>
<li><a href="product.php?id=<?php echo $id; ?>">Men’s</a> </li>
<li><a href="product.php?id=<?php echo $id; ?>">Winter Sale</a></li>
<li><a href="product.php?id=<?php echo $id; ?>">Summer Sale</a></li>
<li><a href="product.php?id=<?php echo $id; ?>">Other</a></li>
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
<input name="letter_email" required type="text" placeholder="Your Email">
<button type="submit" name="send">Send</button>
</div>
</form>
</div>
<ul class="footer-social-links d-flex">
<li><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-facebook-app-symbol"></i></a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-pinterest-1"></i></a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-linkedin"></i></a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-instagram-2"></i></a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-twitter-1"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="footer-bottom row align-items-center">
<div class="col-lg-6 ">
<div class="footer-copyring"> <p>Copyright 2021 EG Shop Fashion | Design By <a href="profile.php?id=<?php echo $id; ?>#">Egens Lab</a></p> </div>
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