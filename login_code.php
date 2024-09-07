<?php

include_once 'conn.php';


if (isset($_POST['login'])) {
    login();
}

function login() {

    global $conn;

    $first_name = $_POST['first_name'];
    $pword = $_POST['pword'];
    
    // check if user exists
    $select = "SELECT * FROM registration WHERE first_name = '$first_name' AND pword = '$pword' ";
    $select = mysqli_query($conn, $select);
    if (mysqli_num_rows($select) > 0) {
        $fetch_id = mysqli_fetch_assoc($select);
        session_start();
        $login_id = $fetch_id['id'];

        $sensitiveData = $login_id;
		$encodedData = base64_encode($sensitiveData);
        $id = $encodedData;
        $_SESSION['id'] = $id;
        
        header("Location: index.php?id=$id");
        exit();

    }else{
        $GLOBALS['login_messg'] = "<p style='color:red;text-align:center'>Incorrect Details</p>";
    }

}



?>