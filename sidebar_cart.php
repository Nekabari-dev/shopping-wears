<?php 

include_once 'conn.php';


// get id from url
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $decoded_id = base64_decode($id);
    preg_match_all('/[0-9]+/', $decoded_id, $matches);
    $new_id = implode('', $matches[0]);
    $GLOBALS['new_id'] = $new_id;    
} else {
    // error message
}



function sidebar_cart($user_cart_id) {

    global $conn;

    $select_cart = "SELECT * FROM cart WHERE user_id = '$user_cart_id' ";
    $select_cart = mysqli_query($conn, $select_cart);
    if (mysqli_num_rows($select_cart) > 0) {
        while($fetch_cart = mysqli_fetch_assoc($select_cart)) {
            $fetch_img = $fetch_cart['prod_img'];
            $fetch_name = $fetch_cart['prod_name'];
            $fetch_price = $fetch_cart['prod_price'];
            $fetch_qty = $fetch_cart['quantity'];
            $user_id = $fetch_cart['id'];
            $GLOBALS['user_id'] = $user_id;

            ?>

            <li class="single-cart-product">
            <div class="cart-product-info d-flex align-items-center">
            <div class="product-img"><img src="uploads/<?php echo $fetch_img; ?>" alt class="img-fluid"></div>
            <div class="product-info">
            <a href="product-details.php?id=<?php echo $id; ?>"><h5 class="product-title"><?php echo $fetch_name; ?></h5></a>
            <ul class="product-rating d-flex">
            <li><i class="bi bi-star-fill"></i></li>
            <li><i class="bi bi-star-fill"></i></li>
            <li><i class="bi bi-star-fill"></i></li>
            <li><i class="bi bi-star-fill"></i></li>
            <li><i class="bi bi-star"></i></li>
            </ul>
            <p class="product-price"><span class="p-price"><?php echo '₦'.$fetch_price; ?></span>
            </p>
            </div>
            </div>
            <div class="cart-product-delete-btn">
            <a href="javascript:void(0)"><i class="flaticon-letter-x"></i></a>
            </div>
            </li>


            <?php

        }
    }else{
        $GLOBALS['cart_error'] = "<p style='color:red;text-align:center;font-family:arial;'><b>No Item On Your Cart!</b></p>";
    }
}
sidebar_cart($new_id);







function sum_cart($sum_id) {
    // sum cart details up
    global $conn;

    $select = "SELECT SUM(prod_price) AS total_sum FROM cart WHERE user_id = '$sum_id' ";
    $select = mysqli_query($conn, $select);

    if ($select) {
        while($fetch = mysqli_fetch_assoc($select)) {    
            $total_sum = $fetch['total_sum'];
            $GLOBALS['total_sum'] = '₦'.$total_sum;
        }
    } else {

    }
}
sum_cart($new_id);






?>