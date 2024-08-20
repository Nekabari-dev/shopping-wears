<!doctype html>
<html lang="en">
<head>
<title>Product Details</title>

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

<?php

include 'product-details_code.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // echo "ID not found in the URL";
}

$GLOBALS['id'] = $id;

?>


<div class="mobil-sidebar d-sm-none">
<ul class="mobil-sidebar-icons">
<li class="category-icon"><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-menu"></i></a></li>
<li><a href="dashboard.php?id=<?php echo $id; ?>"><i class="flaticon-user"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-heart"></i></a></li>
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

<?php include 'sidebar_cart.php'; ?>

</ul>
</div>
<div class="cart-bottom">
<div class="cart-total d-flex justify-content-between">
<label>Subtotal :</label>
<span><?php if(isset($total_sum)) echo $total_sum; ?></span>
</div>
<div class="cart-btns">
<a href="checkout.php?id=<?php echo $id; ?>" class="cart-btn checkout">CHECKOUT</a>
<a href="cart.php?id=<?php echo $id; ?>" class="cart-btn cart">VIEW CART</a>
</div>
<p class="cart-shipping-text"><strong>SHIPPING:</strong> Continue shopping up to <?php if(isset($total_sum)) echo $total_sum; ?> and receive free
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
<a href="javascript:void(0)" class="active">Shop</a>
<i class="fl flaticon-plus">+</i>
<ul class="sub-menu">
<li><a href="product.php?id=<?php echo $id; ?>">Shop</a></li>
<li><a href="product-sidebar.php?id=<?php echo $id; ?>">Shop Sidebar</a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>">Shop Details</a></li>
</ul>
</li>
<li class="has-child-menu">
<a href="javascript:void(0)">Pages</a>
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
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-facebook-app-symbol"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-twitter-1"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-instagram-2"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-pinterest-1"></i></a></li>
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
<h3 class="page-title">Shop Details</h3>
<ul class="page-switcher">
<li><a href="product">Shop <i class="bi bi-chevron-right"></i></a></li>
<li>Shop Details</li>
</ul>
</div>
</div>
</div>
</div>
</div> -->

<div class="product-details-area mt-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12 col-md-10 col-sm-10">
<div class="product-details-wrapper">
<div class="row">
<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8">
<div class="product-switcher-wrap flex-column">
<div class="tab-content" id="v-pills-tabContent">
<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
<div class="pd-preview-img" style="height:370px;">
<img style="height:100%; object-fit:cover;" src="uploads/<?php if(isset($img1)) echo $img1; ?>" alt>
</div>
</div>
<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
<div class="pd-preview-img" style="height:370px;">
<img style="height:100%; object-fit:cover;" src="uploads/<?php if(isset($img2)) echo $img2; ?>" alt>
</div>
</div>
<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
<div class="pd-preview-img" style="height:370px;">
<img style="height:100%; object-fit:cover;" src="uploads/<?php if(isset($img3)) echo $img3; ?>" alt>
</div>
</div>
<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

</div>
</div>
<div class="nav product-tab d-flex justify-content-between" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<div class="product-variation active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home">
<div class="pd-showcase-img">
<img style="height:100px; object-fit:cover;" src="uploads/<?php if(isset($img1)) echo $img1; ?>" alt>
</div>
</div>
<div class="product-variation" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile">
<div class="pd-showcase-img">
<img style="height:100px; object-fit:cover;" src="uploads/<?php if(isset($img2)) echo $img2; ?>" alt>
</div>
</div>
<div class="product-variation" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages">
<div class="pd-showcase-img">
<img style="height:100px; object-fit:cover;" src="uploads/<?php if(isset($img3)) echo $img3; ?>" alt>
</div>
</div>
<div class="product-variation" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings">
<!-- <div class="pd-showcase-img">
<img src="assets/images/product/pd-sm4.png" alt>
</div> -->
</div>
</div>
</div>
</div>



<div class="col-xxl-6 col-xl-6 col-lg-6">
<div class="product-details-wrap">
<div class="pd-top">
<ul class="product-rating d-flex align-items-center">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star"></i></li>
<li class="count-review">(<span>23</span> Review)</li>
</ul>

<h3 class="pd-title"><?php if(isset($product_name)) echo $product_name; ?></h3>

<h5 class="pd-price"><?php if(isset($product_price)) echo '₦'.$product_price; ?></h5>
<p class="pd-small-info"><strong><?php if(isset($product_name)) echo $product_name; ?> -</strong>
<?php if(isset($product_det)) echo $product_det; ?>
</p>
</div>
<div class="pd-quick-discription">
<ul>
<li class="d-flex align-items-center">


<form method="POST">    
<select name="color" Required>
    <option value="">Choose Color</option>
    <option value="Black">Black</option>
    <option value="White">White</option>
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Others">Others</option>
</select>
</li>
<li class="d-flex align-items-center">
<span>Size :</span>
<div class="size-option d-flex align-items-center">
<input type="radio" name="size" id="size1" value="L" Required>
<label for="size1">
<span class="p-size">L</span>
</label>
<input type="radio" name="size" id="size2" value="XL" Required>
<label for="size2">
<span class="p-size">XL</span>
</label>
<input type="radio" name="size" id="size3" value="XXL" Required>
<label for="size3">
<span class="p-size">XXL</span>
</label>
<input type="radio" name="size" id="size4" value="2XL" Required>
<label for="size4">
<span class="p-size">2XL</span>
</label>
</div>
</li>


<li class="d-flex align-items-center pd-cart-btns">
<div class="quantity">
<input name="quantity" type="number" min="1" max="90" value="1" Required>
</div>
<button name="add_to_cart" type="submit" class="pd-add-cart">Add to cart</button>
<button name="order" type="submit" class="pd-add-cart">Buy Now</button>
</form>
</li>
<li class="pd-type">Catagories: <span><?php if(isset($product_type)) echo $product_type; ?></span></li>
<li class="pd-type">Availabile: <span><?php if(isset($quantity)) echo $quantity; ?></span> </li>

</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="product-discription-wrapper mt-100">
<h3 class="details-title">Product Details</h3>
<div class="row ">
<div class="col-xxl-3 col-xl-3 mt-24">
<div class="nav flex-column nav-pills discription-bar" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
<button class="nav-link active" id="pd-discription3" data-bs-toggle="pill" data-bs-target="#pd-discription-pill3" role="tab" aria-controls="pd-discription-pill3">
Discription
</button>
<button class="nav-link" id="pd-discription2" data-bs-toggle="pill" data-bs-target="#pd-discription-pill2" role="tab" aria-controls="pd-discription-pill2">Additional
Information</button>
<button class="nav-link" id="pd-discription1" data-bs-toggle="pill" data-bs-target="#pd-discription-pill1" role="tab" aria-controls="pd-discription-pill1">Leave A Review</button>
</div>
</div>
<div class="col-xxl-9 col-xl-9 mt-24">
<div class="tab-content discribtion-tab-content" id="v-pills-tabContent2">
<div class="tab-pane fade show active" id="pd-discription-pill3" role="tabpanel" aria-labelledby="pd-discription3">
<div class="discription-texts">
<p>
<?php if(isset($product_det)) echo $product_det; ?>
</p>
</div>
</div>
<div class="tab-pane fade" id="pd-discription-pill2" role="tabpanel" aria-labelledby="pd-discription2">
<div class="additional-discription">
<ul>
<li>
<h5 class="additition-name">Color</h5>
<div class="additition-variant"><span>:</span>Red, Green, Blue, Yellow,
pink, </div>
</li>
<li>
<h5 class="additition-name">Availaible Sizes</h5>
<div class="additition-variant"><span>:</span><?php if(isset($aval_sizes)) echo $aval_sizes; ?></div>
</li>

</ul>
</div>
</div>

<div class="tab-pane fade " id="pd-discription-pill1" role="tabpanel" aria-labelledby="pd-discription1">
<div class="discription-review">
<div class="clients-review-cards">
<!-- <div class="client-review-card" style="background-color: red;"> -->
<div class="review-card-head">
<div class="client-img">
<!-- <img src="assets/images/product/reviewer.png" alt> -->
</div>




<!-- <div class="client-info"> -->
<!-- <h5 class="client-name">Jenny Wilson <span class="review-date">- 8th
Jan 2021</span> </h5>
<ul class="review-rating d-flex">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star"></i></li>
</ul>
</div>
</div>
<p class="review-text">
Aenean dolor massa, rhoncus ut tortor in, pretium tempus neque.
Vestibulum venenatis leo et dictum finibus. Nulla vulputate dolor sit
amet tristique dapibus.Gochujang ugh viral, butcher pabst put a bird on
it meditation austin.
</p> -->
<!-- <ul class="review-actions d-flex align-items-center">
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-like"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-heart"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#">Reply</a></li>
</ul> -->
<!-- </div>
<div class="client-review-card">
<div class="review-card-head">
<div class="client-img">
<img src="assets/images/product/reviewer.png" alt>
</div> -->
<!-- <div class="client-info">
<h5 class="client-name">John Smith <span class="review-date">- 8th
Jan 2021</span> </h5>
<ul class="review-rating d-flex">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star"></i></li>
</ul>
</div>
</div>
<p class="review-text">
Aenean dolor massa, rhoncus ut tortor in, pretium tempus neque.
Vestibulum venenatis leo et dictum finibus. Nulla vulputate dolor sit
amet tristique dapibus.Gochujang ugh viral, butcher pabst put a bird on
it meditation austin.
</p> -->
<!-- <ul class="review-actions d-flex align-items-center">
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-like"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-heart"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#">Reply</a></li>
</ul> -->
</div>
</div>
<div class="review-form-wrap">
<h3>Leave A Comment</h3>
<p>Your email address will not be published. Required fields are marked *</p>
<form method="POST" class="review-form">
<div class="row">
<div class="col-lg-6">
<div class="review-input-group">
<label for="fname">First Name</label>
<input type="text" name="fname" id="fname" placeholder="Your first name" required>
</div>
</div>
<div class="col-lg-6">
<div class="review-input-group">
<label for="lname">Last Name</label>
<input type="text" name="lname" id="lname" placeholder="Your last name " required>
</div>
</div>
<div class="col-lg-12">
<div class="review-input-group">
<textarea name="review-area" id="review-area" cols="30" rows="7" placeholder="Your message" required></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="review-rating">
<p>Your Rating</p>
<ul class="d-flex">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
</div>
<div class="submit-btn">
<input type="submit" value="Post Comment">
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="related-box mt-120">
<h3 class="details-title">Related Products</h3>

<?php include 'related_prod.php'; ?>
<?php if(isset($unmatched_err)) echo $unmatched_err; ?>

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
<a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#254c4b434a65405d44485549400b464a48"><span class="__cf_email__" data-cfemail="066f68606946637e676b766a632865696b">[email&#160;protected]</span></a>
<a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#87eee9e1e8c7f4f2f7f7e8f5f3a9e4e8ea"><span class="__cf_email__" data-cfemail="bfd6d1d9d0ffcccacfcfd0cdcb91dcd0d2">[email&#160;protected]</span></a>
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
<li><a href="product-details.php?id=<?php echo $id; ?>#">Privacy Policy</a> </li>
<li><a href="product-details.php?id=<?php echo $id; ?>#">Terms & Conditions</a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#">Our Support</a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#">Terms & Service</a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#">Payment Policy</a></li>
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
<input type="text" placeholder="Your Email" name="email" required>
<button type="submit" name="send">Send</button>
</div>
</form>
</div>
<ul class="footer-social-links d-flex">
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-facebook-app-symbol"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-pinterest-1"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-linkedin"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-instagram-2"></i></a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>#"><i class="flaticon-twitter-1"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="footer-bottom row align-items-center">
<div class="col-lg-6 ">
<div class="footer-copyring"> <p>Copyright 2021 EG Shop Fashion | Design By <a href="product-details.php?id=<?php echo $id; ?>#">Egens Lab</a></p> </div>
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



<style>
    .related-box{
        /* border: 2px solid red; */
        height: auto;
        overflow: hidden;
    }
</style>