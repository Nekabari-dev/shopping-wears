<!doctype html>
<html lang="en">
<head>
<title>Profile</title>

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
include 'profile_code.php';
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
<li class="category-icon"><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-menu"></i></a></li>
<li><a href="temp/admin/login.php?id=<?php echo $id; ?>"><i class="flaticon-user"></i></a></li>
<li><a href="profile.php?id=<?php echo $id; ?>#"><i class="flaticon-heart"></i></a></li>
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


<li><a href="contact.php?id=<?php echo $id; ?>" class="active">Contact Us</a></li>

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



<form method="POST" enctype="multipart/form-data">
    <div class="user-image">
        <img id="img" src="uploads/<?php if(isset($dp)) echo $dp; ?>" alt>
            <div class="prifil-change-icon" id="camera">
            <input type="file" name="dp" onchange="loadFile(event)" id="file" title="Upload image" required>
                <label for="file">
                    <i class="bi bi-camera"></i>
                </label>
            </div>
    </div>

    <div class="profile-top-btns">
        <button name="upload" class="upload">Upload</button>
        <button name="remove" class="remove">Remove</button>
    </div>
</form>

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
<input type="text" name="city" id="city">
</div>
</div>
<div class="col-lg-6">
<div class="eg-input-group">
<label for="state">State *</label>
<input type="text" name="state" id="state">
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
    <option value="">Select a country</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antarctica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cabo Verde">Cabo Verde</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Curaçao">Curaçao</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Eswatini">Eswatini</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guernsey">Guernsey</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
    <option value="Holy See">Holy See</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Isle of Man">Isle of Man</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jersey">Jersey</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
    <option value="Korea, Republic of">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libya">Libya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macao">Macao</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
    <option value="Moldova, Republic of">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montenegro">Montenegro</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Palestine, State of">Palestine, State of</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Réunion">Réunion</option>
    <option value="Romania">Romania</option>
    <option value="Russian Federation">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Barthélemy">Saint Barthélemy</option>
    <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
    <option value="Saint Lucia">Saint Lucia</option>
    <option value="Saint Martin (French part)">Saint Martin (French part)</option>
    <option value="Saint Martin (Dutch part)">Saint Martin (Dutch part)</option>
    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Serbia">Serbia</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
    <option value="South Sudan">South Sudan</option>
    <option value="Spain">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Timor-Leste">Timor-Leste</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States of America">United States of America</option>
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Viet Nam">Viet Nam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
    <option value="Wallis and Futuna">Wallis and Futuna</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
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


<?php if(isset($insert_error)) echo $insert_error; ?>
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





<script>
const showbox = document.getElementById('camera');
const loadFile = function(event){
showbox.style.backgroundImage = "url(" +URL.createObjectURL(event.target.files[0])+ ")";
}
</script>

<style>
    button{
        border:none;
        background-color:transparent;
        margin-top:10px;
    }
    input[type='file'] {
        display: none;
    }
    .upload{
        background-color:black;
        color:white;
        padding: 7px 20px;
        border-radius:5px;
    }
    .remove{
        background-color:white;
        color:black;
        box-shadow:0px 5px 15px rgba(0,0,0,0.15);
        padding: 7px 20px;
        border-radius:5px;
    }
    #img{
        border-radius:50%;
        width: 100%;
        height: 95px;
        object-fit:cover;
    }
</style>