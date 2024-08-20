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

    $select_userid = "SELECT user_id FROM registration WHERE id = '$new_id' ";
    $select_userid = mysqli_query($conn, $select_userid);
    if (mysqli_num_rows($select_userid) > 0) {
        $new_userid = mysqli_fetch_assoc($select_userid);
        $GLOBALS['new_user_id'] = $new_userid['user_id'];
    }else{
        $GLOBALS['new_user_id'] = "Nill";
    }




// select products
function select_prod() {

    global $conn;

    if(isset($_GET['prod_id'])) {
        $prod_id = $_GET['prod_id'];
        $url_decoded_data = urldecode($prod_id);
        $prod_id = base64_decode($url_decoded_data);
        $GLOBALS['prod_id'] = $prod_id;
    } else {
        // error message
    }
    
    $select_prod_id = "SELECT * FROM products WHERE prod_id = '$prod_id' ";
    $select_prod_id = mysqli_query($conn, $select_prod_id);

    if (mysqli_num_rows($select_prod_id) > 0) {
        $new_products = mysqli_fetch_assoc($select_prod_id);
        $GLOBALS['product_name'] = $new_products['product_name'];
        $GLOBALS['aval_sizes'] = $new_products['aval_sizes'];
        $GLOBALS['product_price'] = $new_products['product_price'];
        $GLOBALS['product_type'] = $new_products['product_type'];
        $GLOBALS['quantity'] = $new_products['quantity'];
        $GLOBALS['img1'] = $new_products['image1'];
        $GLOBALS['img2'] = $new_products['image2'];
        $GLOBALS['img3'] = $new_products['image3'];
        $GLOBALS['product_det'] = $new_products['product_det'];
    }else{
        $GLOBALS['prod_error'] = "Product Not Found";
    }

}
select_prod();


// add to cart button
if (isset($_POST['add_to_cart'])) {
    Add_to_cart($prod_id, $new_id);
}

// Add to cart
function Add_to_cart($value_id, $access_id) {
    global $conn;
    global $new_user_id;

    // check if the user has an account
    $check_acct = "SELECT * FROM registration WHERE id = '$access_id' ";
    $check_acct = mysqli_query($conn, $check_acct);
    if(mysqli_num_rows($check_acct) > 0) {

    // select product details to insert
    $select_user_det = "SELECT * FROM products WHERE prod_id = '$value_id' ";
    $select_user_det = mysqli_query($conn, $select_user_det);

    if (mysqli_num_rows($select_user_det) > 0) {
        $fetch_cart_order = mysqli_fetch_assoc($select_user_det);
        $cart_name = $fetch_cart_order['product_name'];
        
        $cart_price = $fetch_cart_order['product_price'];
        $cart_price = str_replace('&#8358;', '', $cart_price);
        $cart_price = str_replace(',', '', $cart_price);
        $cart_price = str_replace(' ', '', $cart_price);

        $cart_img = $fetch_cart_order['image1'];
    
        $GLOBALS['cart_name'] = $cart_name;
        $GLOBALS['cart_price'] = $cart_price;
        $GLOBALS['cart_img'] = $cart_img;
    
        $color = $_POST['color'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];

        $insert_into_cart = "INSERT INTO cart (user_id, color, cloth_size, quantity, prod_name, prod_price, prod_img) 
        VALUES ('$new_user_id', '$color', '$size', '$quantity', '$cart_name', '$cart_price', '$cart_img')";
        $insert_into_cart = mysqli_query($conn, $insert_into_cart);

    }else{
        $GLOBALS['cart_error'] = "Product Not Found";
    }

}else{
    header("Location: register.php");
    exit();
}

}

    $user_cart = "SELECT user_id FROM registration WHERE id = '$new_id' ";
    $user_cart = mysqli_query($conn, $user_cart);

    if (mysqli_num_rows($user_cart) > 0) {
        $fetch_det = mysqli_fetch_assoc($user_cart);
        $GLOBALS['details'] = $fetch_det['user_id'];
        
        $count_order = "SELECT COUNT(*) AS order_det FROM cart WHERE user_id = '$details' ";
        $count_order = mysqli_query($conn, $count_order);
        $check_true = mysqli_num_rows($count_order);
        if ($check_true > 0) {
            $number_of_orders = mysqli_fetch_assoc($count_order);
            $GLOBALS['added_to_cart'] = $number_of_orders['order_det'];
        }    
    }else{
        $GLOBALS['added_to_cart'] = "0";
    }





?>
