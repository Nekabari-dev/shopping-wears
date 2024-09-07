<?php

include_once 'conn.php';


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $GLOBALS['id'] = $id;
    $decoded_id = base64_decode($id);
    preg_match_all('/[0-9]+/', $decoded_id, $matches);
    $new_id = implode('', $matches[0]); 
    $GLOBALS['new_id'] = $new_id;
}else{
    $GLOBALS['new_id'] = "0";
}


if (isset($_POST['create_prof'])) {
    insert_profile_det($new_id);
}

function insert_profile_det($my_id) {

    global $conn;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $country = $_POST['country'];
    $pword = $_POST['pword'];
    $conf_pword = $_POST['conf_pword'];

    if($pword !== $conf_pword) {
        $GLOBALS['insert_error'] = "<p style='color:red;text-align:center;'><b>Passwords Do Not Match!</b></p>";
    }else{

        $insert = "INSERT INTO profile (my_id, first_name, last_name, email, contact, address, city, state, zip_code, country, pword)
        VALUES ('$my_id', '$fname', '$lname', '$email', '$contact', '$address', '$city', '$state', '$zip_code', '$country', '$pword') ";
        $insert = mysqli_query($conn, $insert);

        $GLOBALS['insert_error'] = "<p style='color:green;text-align:center;'><b>Profile Updated!</b></p>";

    }


}



if (isset($_POST['upload'])) {
    upload_dp($new_id);
}

function upload_dp($upload_id) {

    global $conn;

    if (isset($_FILES['dp']) && $_FILES['dp']['tmp_name'] != '') {
        $file = $_FILES['dp'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
    
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    
        $allowedFormats = array('jpg', 'jfif', 'png', 'webp', 'jpeg');
        if (in_array($fileExt, $allowedFormats)) {
    
        if(move_uploaded_file($fileTmpName, 'uploads/'.$fileName)){
            $update = "UPDATE profile SET image = '$fileName' WHERE my_id = '$upload_id' ";
            $update = mysqli_query($conn, $update);
        }else{
            $GLOBALS['dp_error'] = "File upload error";
        }
        } else {
            $GLOBALS['dp_error'] = 'Invalid file format';
        }
        } else {
            $GLOBALS['dp_error'] = '<b style="color:red;">No image selected</b>';
        }

}



function select_image($this_id) {

    global $conn;

    $select = "SELECT image FROM profile WHERE my_id = '$this_id' ";
    $select = mysqli_query($conn, $select);

    if (mysqli_num_rows($select) > 0) {
        while($fetch_image = mysqli_fetch_assoc($select)) {
            $GLOBALS['dp'] = $fetch_image['image'];
        }
    }else{
        $GLOBALS['dp'] = '';
    }

}
select_image($new_id);























?>