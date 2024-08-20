<?php

include_once 'conn.php';

if(isset($_POST['submit'])) {
    admin_login();
}

    // check if the database is not empty
    $select_details = "SELECT * FROM admin_login WHERE username = 'admin' AND password = '12345' ";
    $select_details = mysqli_query($conn, $select_details);
    if(mysqli_num_rows($select_details) > 0)  {
        return;
    }else{
        $insert = "INSERT INTO admin_login (username, password) VALUES ('admin', 12345) ";
        $insert = mysqli_query($conn, $insert);
    }

function admin_login() {

    global $conn;

    $name = $_POST['name']; 
    $pass = $_POST['pass'];

    $select = "SELECT * FROM admin_login WHERE username = '$name' AND password = '$pass' ";
    $select = mysqli_query($conn, $select);
    if(mysqli_num_rows($select) > 0) {
        header("Location: dashboard.php");
        exit();
    }else{
        $GLOBALS['error'] = "<p style='color:red;text-align:center;'>Incorrect Details</p>";
    }
}


?>