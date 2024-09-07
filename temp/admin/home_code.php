<?php 

include_once '../config.php';

// count products
function count_prod() {

    global $conn;

    $count = "SELECT COUNT(*) AS product FROM products ";
    $count = mysqli_query($conn, $count);
    if (mysqli_num_rows($count) > 0) {
        $fetch_count = mysqli_fetch_assoc($count);
        $GLOBALS['products'] = $fetch_count['product'];
    }else{
        $GLOBALS['products'] = "0";
    }

}
count_prod();


// count categories
function count_categ() {

    global $conn;

    $categ = "SELECT COUNT(product_type) AS category FROM products WHERE product_type = 'Top' ";
    $categ = mysqli_query($conn, $categ);
    if (mysqli_num_rows($categ) > 0) {
        $fetch_count = mysqli_fetch_assoc($categ);
        $categ_num = $fetch_count['category'];
    }else{
        $categ_num = "0";
    }

    if ($categ_num >= 1) {
        $types = "1";
    }else{
        $types = "0";
    }


    $bottom_categ = "SELECT COUNT(product_type) AS bottom FROM products WHERE product_type = 'Bottom' ";
    $bottom_categ = mysqli_query($conn, $bottom_categ);
    if (mysqli_num_rows($bottom_categ) > 0) {
        $fetch_bottom = mysqli_fetch_assoc($bottom_categ);
        $bottom_categ = $fetch_bottom['bottom'];
    }else{
        $bottom_categ = "0";
    }

    if ($bottom_categ >= 1) {
        $btm = "1";
    }else{
        $btm = "0";
    }


    $shoes_categ = "SELECT COUNT(product_type) AS footwears FROM products WHERE product_type = 'Footwear' ";
    $shoes_categ = mysqli_query($conn, $shoes_categ);
    if (mysqli_num_rows($shoes_categ) > 0) {
        $fetch_shoes = mysqli_fetch_assoc($shoes_categ);
        $shoes_categ = $fetch_shoes['footwears'];
    }else{
        $shoes_categ = "0";
    }

    if ($shoes_categ >= 1) {
        $total_shoes = "1";
    }else{
        $total_shoes = "0";
    }



    $native_categ = "SELECT COUNT(product_type) AS native_wears FROM products WHERE product_type = 'Native' ";
    $native_categ = mysqli_query($conn, $native_categ);
    if (mysqli_num_rows($native_categ) > 0) {
        $fetch_native = mysqli_fetch_assoc($native_categ);
        $native_categ = $fetch_native['native_wears'];
    }else{
        $native_categ = "0";
    }

    if ($native_categ >= 1) {
        $total_native_wears = "1";
    }else{
        $total_native_wears = "0";
    }

    $GLOBALS['total_categ'] = $types + $btm + $total_shoes + $total_native_wears;


}
count_categ();











?>