<?php 

include_once 'conn.php';

if (isset($_POST['update'])) {
    add_product();
}

function add_product() {
   
global $conn;

$name = $_POST['name'];
$price = $_POST['price'];
$sizes = $_POST['sizes'];
$details = $_POST['details'];
$categ = $_POST['categ'];
$amount = $_POST['amount'];

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


        $insert_product = "INSERT INTO products (product_name, aval_sizes, product_price, product_type, quantity, image1, image2, image3, product_det) 
        VALUES ('$name', '$sizes', '$price', '$categ', '$amount', '$fileName', '$fileName_2', '$fileName_3', '$details') ";
        $insert_product = mysqli_query($conn, $insert_product);
        echo "<script>alert('Your Product Has Been Uplaoded ✅');</script>";

}




?>