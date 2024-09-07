<?php 

include_once 'conn.php';

function count_top() {

    global $conn;

    $count_top = "SELECT COUNT(*) AS top_count FROM products WHERE product_type = 'Top' ";
    $count_top = mysqli_query($conn, $count_top);
    if(mysqli_num_rows($count_top) > 0){
        $fetch_count = mysqli_fetch_assoc($count_top);
        $GLOBALS['total_top'] = $fetch_count['top_count'];
    }else{
        $GLOBALS['total_top'] = "0";
    }

}
count_top();



function count_bottom() {

    global $conn;

    $count_bottom = "SELECT COUNT(*) AS bottom_count FROM products WHERE product_type = 'Bottom' ";
    $count_bottom = mysqli_query($conn, $count_bottom);
    if(mysqli_num_rows($count_bottom) > 0){
        $fetch_count = mysqli_fetch_assoc($count_bottom);
        $GLOBALS['total_bottom'] = $fetch_count['bottom_count'];
    }else{
        $GLOBALS['total_bottom'] = "0";
    }

}
count_bottom();




function count_footwears() {

    global $conn;

    $count_footwear = "SELECT COUNT(*) AS footwear FROM products WHERE product_type = 'Footwear' ";
    $count_footwear = mysqli_query($conn, $count_footwear);
    if(mysqli_num_rows($count_footwear) > 0){
        $fetch_count = mysqli_fetch_assoc($count_footwear);
        $GLOBALS['total_footwears'] = $fetch_count['footwear'];
    }else{
        $GLOBALS['total_footwears'] = "0";
    }

}
count_footwears();



function count_native() {

    global $conn;

    $count_native_wears = "SELECT COUNT(*) AS native_wear FROM products WHERE product_type = 'Native' ";
    $count_native_wears = mysqli_query($conn, $count_native_wears);
    if(mysqli_num_rows($count_native_wears) > 0){
        $fetch_count = mysqli_fetch_assoc($count_native_wears);
        $GLOBALS['total_native_wears'] = $fetch_count['native_wear'];
    }else{
        $GLOBALS['total_native_wears'] = "0";
    }

}
count_native();














?>