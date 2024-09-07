<?php 

include_once '../config.php';

if (isset($_POST['update'])) {
    add_product();
}

function add_product() {
   
global $conn;

$name = $_POST['name'];
$price = $_POST['price'];
$sizes = $_POST['size'];
$details = $_POST['desc'];
$categ = $_POST['categ'];
$amount = $_POST['quantity'];

$categ = mysqli_real_escape_string($conn, $categ);
$details = mysqli_real_escape_string($conn, $details);

// first image
if (isset($_FILES['image_01']) && $_FILES['image_01']['tmp_name'] != '') {
    $first_file = $_FILES['image_01'];
    $fileName = $first_file['name'];
    $fileTmpName = $first_file['tmp_name'];
    $fileSize = $first_file['size'];
    $fileError = $first_file['error'];

    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $allowedFormats = array('jpg', 'jfif', 'png', 'webp', 'jpeg');
    if (in_array($fileExt, $allowedFormats)) {

    if(move_uploaded_file($fileTmpName, 'uploads/'.$fileName)){
        
    }else{
        echo "File upload error";
    }
    } else {
        echo 'Invalid file format';
    }
    } else {
        $dp_error = '<b style="color:red;">No image selected</b>';

    }


// second image
if (isset($_FILES['image_02']) && $_FILES['image_02']['tmp_name'] != '') {
    $second_file = $_FILES['image_02'];
    $fileName_2 = $second_file['name'];
    $fileTmpName_2 = $second_file['tmp_name'];
    $fileSize_2 = $second_file['size'];
    $fileError_2 = $second_file['error'];

    $fileExt_2 = strtolower(pathinfo($fileName_2, PATHINFO_EXTENSION));

    $allowedFormats_2 = array('jpg', 'jfif', 'png', 'webp', 'jpeg');
    if (in_array($fileExt_2, $allowedFormats_2)) {

    if(move_uploaded_file($fileTmpName_2, 'uploads/'.$fileName_2)){
        
    }else{
        echo "File upload error";
    }
    } else {
        echo 'Invalid file format';
    }
    } else {
        $dp_error = '<b style="color:red;">No image selected</b>';

    }


    // third image
    if (isset($_FILES['image_03']) && $_FILES['image_03']['tmp_name'] != '') {
        $third_file = $_FILES['image_03'];
        $fileName_3 = $third_file['name'];
        $fileTmpName_3 = $third_file['tmp_name'];
        $fileSize_3 = $third_file['size'];
        $fileError_3 = $third_file['error'];
    
        $fileExt_3 = strtolower(pathinfo($fileName_3, PATHINFO_EXTENSION));
    
        $allowedFormats_3 = array('jpg', 'jfif', 'png', 'webp', 'jpeg');
        if (in_array($fileExt_3, $allowedFormats_3)) {
    
        if(move_uploaded_file($fileTmpName_3, 'uploads/'.$fileName_3)){
            
        }else{
            echo "File upload error";
        }
        } else {
            echo 'Invalid file format';
        }
        } else {
            $dp_error = '<b style="color:red;">No image selected</b>';
    
        }

        $select = "SELECT * FROM products WHERE product_type = '$categ' ";
        $select = mysqli_query($conn, $select);
        if (mysqli_num_rows($select) > 0) {    
            
            $update = "UPDATE products SET product_name = '$name', aval_sizes = '$sizes', product_price = '$price', quantity = '$amount', image1 = '$fileName', 
            image2 = '$fileName_2', image3 = '$fileName_3', product_det = '$details' WHERE product_type = '$categ' "; 
        
            $update = mysqli_query($conn, $update);
        
            $GLOBALS['message'] = "<p style='text-align:center;color:white;'>Your Product Has Been Added ✅ </p>";
        
    }else{
        $GLOBALS['message'] = "<p style='text-align:center;color:red;'><b>Unmatched Category Name !</b></p>";
    }


}




?>