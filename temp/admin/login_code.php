<?php 

include_once '../config.php';





function insert() {

    global $conn;

    $select = "SELECT * FROM admin_login WHERE username = 'admin' AND password = 12345 ";
    $select = mysqli_query($conn, $select);
    if (mysqli_num_rows($select) > 0) {
        
    }else{
        $insert = "INSERT INTO admin_login (username, password) VALUES ('Admin', 12345) ";
        $insert = mysqli_query($conn, $insert);
    }

}
insert();



if (isset($_POST['login'])) {
    login();
}

function login() {

    session_start();
    global $conn;

    $uname = $_POST['uname'];
    $password = $_POST['password'];

    $check = "SELECT * FROM admin_login WHERE username = '$uname' AND password = '$password' ";
        $check = mysqli_query($conn, $check);
        if (mysqli_num_rows($check) > 0) {
            $_SESSION['uname'] = $uname;
            header("Location: admin_home.php");
            exit();
        }else{
            $GLOBALS['error'] = "<p style='color:red;text-align:center;'>Invalid Details</p>";
        }

}















?>