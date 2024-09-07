<?php

include_once 'conn.php';
include 'styles.php';

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



function check_out($cart_id) {

    global $conn;
    global $fonts;

    $select_from_cart = "SELECT * FROM cart WHERE user_id = '$cart_id' ";
    $select_from_cart = mysqli_query($conn, $select_from_cart);
    if (mysqli_num_rows($select_from_cart) > 0) {
        while($fetch_from_cart = mysqli_fetch_assoc($select_from_cart)) {
            $image = $fetch_from_cart['prod_img'];
            $prod_name = $fetch_from_cart['prod_name'];
            $prod_price = $fetch_from_cart['prod_price'];
            $quantity = $fetch_from_cart['quantity'];
            $user_id = $fetch_from_cart['id'];
            $GLOBALS['user_id'] = $user_id;

            ?>

            <li class="single-product">
            <div class="product-img">
            <img style="width:100px;height:80px;object-fit:cover;" src="temp/admin/uploads/<?php echo $image; ?>" alt>
            </div>
            <div class="product-info">
            <h5 class="product-title" style="<?php echo $fonts; ?>"><?php echo $prod_name; ?></h5>
            <div class="product-total">
            <div class="quantity">
            <div><?php echo $quantity; ?></div>
            </div>
            <strong> <i class="bi bi-x-lg"></i> <span class="product-price"><?php echo '₦'.$prod_price; ?></span></strong>
            </div>
            </div>
            </li>



            <?php

        }
    }else{
        $GLOBALS['cart_error'] = "<p style='color:red;text-align:center;font-family:arial;'><b>No Item On Your Cart!</b></p>";
    }
}
check_out($new_id);




function calculate_details($sum_id) {
    // sum cart details up
    global $conn;

    $select = "SELECT SUM(prod_price) AS total_price FROM cart WHERE user_id = '$sum_id' ";
    $select = mysqli_query($conn, $select);

    if ($select) {
        while($fetch = mysqli_fetch_assoc($select)) {    
            $total_price = $fetch['total_price'];
            $GLOBALS['total_price'] = '₦'.$total_price;
        }
    } else {

    }
    $sub_total = $total_price +5 +15 +15;
    $sub_total = '₦'.$sub_total;
    $GLOBALS['sub_total'] = $sub_total;
}
calculate_details($new_id);















?>