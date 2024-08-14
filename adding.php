<?php

include_once 'conn.php';

global $new_id;

// get id from url
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $decoded_id = base64_decode($id);
    preg_match_all('/[0-9]+/', $decoded_id, $matches);
    $new_id = implode('', $matches[0]);    
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



// add to cart button
if (isset($_POST['add_to_cart'])) {
    Add_to_cart();
}

// Add to cart
function Add_to_cart() {
    global $conn;
    global $new_user_id;

    $color = $_POST['color'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];

    $insert_into_cart = "INSERT INTO cart (user_id, color, cloth_size, quantity) VALUES ('$new_user_id', '$color', '$size', '$quantity')";
    $insert_into_cart = mysqli_query($conn, $insert_into_cart);
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