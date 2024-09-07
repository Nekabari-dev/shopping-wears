<?php 

include_once "../config.php";



if (isset($_POST['change'])) {
    change_pword();
}

function change_pword() {

    global $conn;

    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
        $update = "UPDATE admin_login SET password = '$password' ";
        $update = mysqli_query($conn, $update);
        $GLOBALS['error'] = "<p style='color:#00cc00;text-align:center;'><b>Your Password Has Been Set ✅</b></p>";
    }else{
        $GLOBALS['error'] = "<p style='color:red;text-align:center;'><b>Paswords Do Not Match!</b></p>";
    }

}







?>