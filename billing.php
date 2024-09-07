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







if(isset($_POST['order'])) {
    update_profile();
}

function update_profile() {

    global $conn;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $country = $_POST['country'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $notes = $_POST['notes'];

    $notes = mysqli_real_escape_string($conn, $notes);

    $update = "UPDATE profile SET first_name = '$fname', last_name = '$lname', country = '$country', contact = '$contact', email = '$email', order_note = '$notes' ";
    $update = mysqli_query($conn, $update);

    $GLOBALS['update_err'] = "<p style='text-align:center;color:green;font-family:arial black;'><b>Billing Details Saved!</b></p>";

}



if(isset($_POST['ship'])) {
    update_shipping($new_id);
}

function update_shipping($id) {

    global $conn;

    $alt_fname = $_POST['alt_fname'];
    $alt_lname = $_POST['alt_lname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $post_code = $_POST['post_code'];
    $alt_notes = $_POST['alt_notes'];
    
    $alt_notes = mysqli_real_escape_string($conn, $alt_notes);

    $insert = "INSERT INTO shipping (my_id, first_name, last_name, address, city, postal_code, order_note)
    VALUES ('$id', '$alt_fname', '$alt_lname', '$address', '$city', '$post_code', '$alt_notes') ";
    $insert = mysqli_query($conn, $insert);

    $GLOBALS['shipping_err'] = "<p style='text-align:center;color:green;font-family:arial black;'><b>Shipping Details Saved!</b></p>";

}




















?>