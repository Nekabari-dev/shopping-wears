<!doctype html>
<html lang="en">
<head>
<title>Checkout</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="assets/images/product/logo.png" type="image/png" sizes="20x20">

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

<style>
        tr{
            display: none;
        }
        td{
            display:none;
        }
        button[name='search_btn'] {
            padding: 6px 24px;
            border:none;
            background-color:black;
            color:white;
            border-radius:7px;
            margin-top:10px;
        }
    </style>



<!-- include statemant -->
<?php 

include 'adding.php';
include 'search.php';

 if(isset($_GET['id'])) {
     $id = $_GET['id'];
 } else {
     // echo "ID not found in the URL";
 }

 $GLOBALS['id'] = $id;

?>

<div class="mobil-sidebar d-sm-none">
<ul class="mobil-sidebar-icons">
<li class="category-icon"><a href="checkout.php?id=<?php echo $id; ?>#"><i class="flaticon-menu"></i></a></li>
<li><a href="temp/admin/login.php?id=<?php echo $id; ?>"><i class="flaticon-user"></i></a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>#"><i class="flaticon-heart"></i></a></li>
<li class="cart-icon">
<a href="cart.php?id=<?php echo $id; ?>"><i class="flaticon-shopping-cart"></i></a>
<div class="cart-count"><span><?php if(isset($added_to_cart)) echo $added_to_cart; ?></span></div>
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

<?php include 'categ_sidebar.php'; ?>

<div class="accordion" id="categoryExample">
<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading1">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoryOne" aria-expanded="false" aria-controls="categoryOne">
<i class="flaticon-woman"></i> Tops (Unisex)
</button>
</h2>
<div id="categoryOne" class="accordion-collapse collapse" aria-labelledby="categoryHeading1" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php echo $id; ?>">Total Products</a> <span class="product-amount">(<?php if(isset($total_top)) echo $total_top; ?>)</span></li>
</ul>
</div>
</div>
</div>


<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading2">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoryTwo" aria-expanded="false" aria-controls="categoryTwo">
<i class="flaticon-children"></i> Bottoms (Unisex)
</button>
</h2>
<div id="categoryTwo" class="accordion-collapse collapse" aria-labelledby="categoryHeading2" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php echo $id; ?>">Total Products</a> <span class="product-amount">(<?php if(isset($total_bottom)) echo $total_bottom; ?>)</span></li>
</ul>
</div>
</div>
</div>




<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading3">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoryThree" aria-expanded="false" aria-controls="categoryThree">
<i class="flaticon-shoes"></i></i> Footwear (Unisex)
</button>
</h2>
<div id="categoryThree" class="accordion-collapse collapse" aria-labelledby="categoryHeading3" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php echo $id; ?>">Total Products</a> <span class="product-amount">(<?php if(isset($total_footwears)) echo $total_footwears; ?>)</span></li>
</ul>
</div>
</div>
</div>



<div class="accordion-item">
<h2 class="accordion-header" id="categoryHeading4">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoryFour" aria-expanded="false" aria-controls="categoryFour">
<i class="flaticon-man"></i> Men (Native outfits)
</button>
</h2>
<div id="categoryFour" class="accordion-collapse collapse" aria-labelledby="categoryHeading4" data-bs-parent="#categoryExample" style>
<div class="accordion-body">
<ul class="sb-category-list">
<li><a href="product.php?id=<?php echo $id; ?>">Total Products</a> <span class="product-amount">(<?php if(isset($total_native_wears)) echo $total_native_wears; ?>)</span></li>
</ul>
</div>
</div>
</div>


<?php 

    include 'new_categ.php';

?>



</div>
</div>
</div>


<div class="main-searchbar">
    <div class="searchbar-wrap">
        <div class="container">
            <form method="POST" class="main-searchbar-form">
                <h5>What are you looking for?</h5>
                <div class="searchbar-input">
                    <div class="input-wrap w-100 position-relative">
                            <?php include 'search.php'; ?>
                            <input required name="search" type="text" placeholder="Search Products, Categories...">
                            <button name="search_btn">Search</button>
                            <!-- search result -->
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

<img style="height:100%;width:60%;object-fit:contain;" src="assets/images/product/logo.png" alt="">

<div class="mobile-menu d-flex ">
<ul class="d-flex mobil-nav-icons align-items-center">
<li class="search-icon global-top"><a href="javascript:void(0)"><i class="flaticon-search-1"></i></a></li>
<li><a href="temp/admin/login.php?id=<?php echo $id; ?>"><i class="flaticon-user"></i></a></li>
<li class="category-icon"><a href="javascript:void(0)"><i class="flaticon-menu"></i></a></li>
<li class="cart-icon"><a href="javascript:void(0)"><i class="flaticon-shopping-cart"></i></a>
<div class="has-count"><?php if(isset($added_to_cart)) echo $added_to_cart; ?></div>
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
<!-- <li class="has-child-menu"> -->
<!-- <a href="javascript:void(0)">Shop</a>
<i class="fl flaticon-plus">+</i> -->
<!-- <ul class="sub-menu"> -->
<li><a href="product.php?id=<?php echo $id; ?>">Shop</a></li>
<!-- <li><a href="product-sidebar.php?id=<?php echo $id; ?>">Shop Sidebar</a></li>
<li><a href="product-details.php?id=<?php echo $id; ?>">Shop Details</a></li>
</ul> -->
</li>


<li><a href="contact.php?id=<?php echo $id; ?>">Contact Us</a></li>

</ul>
<ul class="inner-social-icons d-xl-none d-flex flex-wrap">
<li><a href="checkout.php?id=<?php echo $id; ?>#"><i class="flaticon-facebook-app-symbol"></i></a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>#"><i class="flaticon-twitter-1"></i></a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>#"><i class="flaticon-instagram-2"></i></a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>#"><i class="flaticon-pinterest-1"></i></a></li>
</ul>
</nav>
</div>
<div class="col-xl-3 col-2 d-none d-xl-block">
<div class="nav-right h-100 d-flex align-items-center justify-content-end">
<ul class="d-flex nav-icons">
<li class="search-icon"><a href="javascript:void(0)"><i class="flaticon-search-1"></i></a></li>
<li><a href="temp/admin/login.php?id=<?php echo $id; ?>"><i class="flaticon-user"></i></a></li>
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
<h3 class="page-title">Checkout</h3>
<ul class="page-switcher">
<li><a href="index.php?id=<?php echo $id; ?>">Home <i class="bi bi-chevron-right"></i></a></li>
<li>Checkout</li>
</ul>
</div>
</div>
</div>
</div>
</div> -->

<div class="checkout-area mt-90">
<div class="container">
<div class="row">
<div class="col-lg-7">

<?php include 'styles.php'; ?>

<form method="POST" class="billing-from">
<h5 class="checkout-title">
Billing Details
</h5>
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="eg-input-group">
<label for="first-name1">First Name</label>
<input type="text" id="first-name1" name="fname" placeholder="Your first name" required>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="eg-input-group">
<label for="last-name">Last Name</label>
<input type="text" id="last-name" placeholder="Your last name" name="lname" required>
</div>
</div>
<div class="col-lg-12">
<div class="eg-input-group">
<label for="country">Country / Region</label>
<input type="text" id="country" placeholder="Your country name" name="country" required>
</div>
</div>
<div class="col-lg-12">
<div class="eg-input-group">

<label>Additional Information</label>
<input type="text" placeholder="Your Phone Number" name="contact" required>
</div>
<div class="eg-input-group">
<input type="text" placeholder="Your Email Address" name="email" required>
</div>
<div class="eg-input-group mb-0">
<textarea cols="30" rows="7" placeholder="Order Notes (Optional)" name="notes"></textarea>
</div>
</div>
</div>
<?php include 'billing.php'; ?>
<?php if(isset($update_err)) echo $update_err; ?>
<button type="submit" name="order" style="<?php if(isset($style)) echo $style; ?>">Add</button>
</form>



<form class="different-address-form" method="POST">
<h5 class="checkout-title">
Ship to a Different Address?
</h5>
<div class="row">
<div class="col-lg-6">
<div class="eg-input-group">
<label for="first-name-d">First Name</label>
<input type="text" id="first-name-d" placeholder="Your first name" name="alt_fname" required>
</div>
</div>
<div class="col-lg-6">
<div class="eg-input-group">
<label for="last-name-d">Last Name</label>
<input type="text" id="last-name-d" placeholder="Your last name" name="alt_lname" required>
</div>
</div>
<div class="col-lg-12">
<div class="eg-input-group mb-0">

<label>Street Address</label>
<input type="text" placeholder="House and street name" name="address" required>
</div><br>
<div class="eg-input-group">
<input type="text" name="city" id="category-sort" placeholder="City" required>
</div>
<div class="eg-input-group">
<input type="text" placeholder="Post Code" name="post_code" required>
</div>
</div>
<div class="col-lg-12">
<div class="eg-input-group">

<textarea cols="30" rows="6" placeholder="Order Notes (Optional)" name="alt_notes"></textarea>
</div>
</div>
</div>
<?php if(isset($shipping_err)) echo $shipping_err; ?>
<button type="submit" name="ship" style="<?php if(isset($style)) echo $style; ?>">Add</button>
</form>



</div>
<div class="col-lg-5">
<div class="order-summary">
<div class="added-product-summary">
<h5 class="checkout-title">
Order Summary
</h5>
<ul class="added-products">

<?php include 'checkout_code.php'; ?>

</ul>
</div>
<div class="total-cost-summary">
<ul>
<li class="subtotal">Subtotal <span><?php if(isset($total_price)) echo $total_price; ?></span></li>
<li>Tax <span>₦5</span></li>
<li>Total ( tax excl.) <span>₦15</span></li>
<li>Total ( tax incl.) <span>₦15</span></li>
</ul>
</div>
<div class="total-cost">
<ul>
<li class="d-flex justify-content-between">Subtotal <span><?php if(isset($sub_total)) echo $sub_total; ?></span></li>
</ul>
</div>


<form method="POST" class="payment-form">
<div class="payment-methods">
<div class="form-check payment-check">
<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
<label class="form-check-label" for="flexRadioDefault1">
Check payments
</label>
<p>Please send a check to Store Name, Store Street, Store Town, Store State /
County, Store Postcode.</p>
</div>
<div class="form-check payment-check">
<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
<label class="form-check-label" for="flexRadioDefault2">
Cash on delivery
</label>
<p>Pay with cash upon delivery.</p>
</div>
<div class="form-check payment-check paypal">
<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
<label class="form-check-label" for="flexRadioDefault3">
PayPal
</label>
<img src="assets/images/payment/payment-cards.png" alt>
<a href="checkout.php?id=<?php echo $id; ?>#" class="about-paypal">What is PayPal</a>
</div>
<div class="payment-form-bottom d-flex align-items-center">
<input type="checkbox" id="terms">
<label for="terms">I have read and agree to the website <a href="checkout.php?id=<?php echo $id; ?>#">Terms and
conditions</a></label>
</div>
</div>
<div class="place-order-btn">
<button type="submit" name="order">Place Order</button>
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
<a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#670e09010827021f060a170b024904080a"><span class="__cf_email__" data-cfemail="721b1c141d32170a131f021e175c111d1f">[email&#160;protected]</span></a>
<a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#d5bcbbb3ba95a6a0a5a5baa7a1fbb6bab8"><span class="__cf_email__" data-cfemail="660f08000926151316160914124805090b">[email&#160;protected]</span></a>
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
<li><a href="checkout.php?id=<?php echo $id; ?>#">Privacy Policy</a> </li>
<li><a href="checkout.php?id=<?php echo $id; ?>#">Terms & Conditions</a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>#">Our Support</a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>#">Terms & Service</a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>#">Payment Policy</a></li>
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
<input required type="text" placeholder="Your Email" name="email">
<button type="submit" name="send">Send</button>
</div>
</form>
</div>
<ul class="footer-social-links d-flex">
<li><a href="checkout.php?id=<?php echo $id; ?>#"><i class="flaticon-facebook-app-symbol"></i></a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>#"><i class="flaticon-pinterest-1"></i></a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>#"><i class="flaticon-linkedin"></i></a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>#"><i class="flaticon-instagram-2"></i></a></li>
<li><a href="checkout.php?id=<?php echo $id; ?>#"><i class="flaticon-twitter-1"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="footer-bottom row align-items-center">
<div class="col-lg-6 ">
<div class="footer-copyring"> <p>Copyright 2021 EG Shop Fashion | Design By <a href="checkout.php?id=<?php echo $id; ?>#">Egens Lab</a></p> </div>
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