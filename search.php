<?php 

include_once 'conn.php';

if(isset($_GET['id'])) {
    $id = $_GET['id']; 
    $GLOBALS['id'] = $id;
   } else {
       // echo "ID not found in the URL";
}


if(isset($_POST['search_btn'])) {
    
    $search = $_POST['search']; 
    header("Location: result.php?id=$id&search=$search");

}









?>

