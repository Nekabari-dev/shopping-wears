<?php 

include_once 'conn.php';

if (isset($_POST['register'])) {
    register();
}

function register() {
    global $conn;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pword = $_POST['pword'];
    $conf_pword = $_POST['conf_pword'];
    
    $email_val = "SELECT * FROM registration WHERE email = '$email'  ";
    $email_val = mysqli_query($conn, $email_val);
    if (mysqli_num_rows($email_val) > 0) {
        $GLOBALS['reg_messg'] = "<p style='color:red; text-align:center;'><b>Email Already Exists</b></p>";
    }elseif($pword !== $conf_pword) {
        $GLOBALS['reg_messg'] = "<p style='color:red; text-align:center;'><b>Passwords Do Not Match</b></p>";
    }else{
        $insert = "INSERT INTO registration (first_name, last_name, email, pword) VALUES ('$fname', '$lname', '$email', '$pword') ";
        $insert = mysqli_query($conn, $insert);
        $GLOBALS['reg_messg'] = "<p style='color:#00b300; text-align:center;'><b>&#10004; Your Account Has Been Created Successfully</b></p>";

        $select_id = "SELECT id FROM registration WHERE email = '$email' ";
        $select_id = mysqli_query($conn, $select_id);
        if (mysqli_num_rows($select_id) > 0) {
            $fetch_id = mysqli_fetch_assoc($select_id);
            $id = $fetch_id['id'];
        }
        header("Location: index.php?id='$id'");
        exit();
    }
}






?>