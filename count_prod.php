<?php 

include_once 'conn.php';

function count_prod() {

    global $conn;


    $select = "SELECT COUNT(*) AS amount FROM products 
    WHERE  
        product_name IS NOT NULL AND product_name != '' 
        AND aval_sizes IS NOT NULL AND aval_sizes != '' 
        AND product_price IS NOT NULL AND product_price != '' 
        AND product_type IS NOT NULL AND product_type != '' 
        AND quantity IS NOT NULL AND quantity != '' 
        AND image1 IS NOT NULL AND image1 != '' 
        AND image2 IS NOT NULL AND image2 != '' 
        AND image3 IS NOT NULL AND image3 != '' ";

    $select = mysqli_query($conn, $select);

    if(mysqli_num_rows($select) > 0) {
        $fetch_count = mysqli_fetch_assoc($select);
        $item_number = $fetch_count['amount'];
    }else{
        $GLOBALS['count'] = "0";
    }

    $result = "Result";
    $results = "Results";

    if ($item_number <= 1) {
        $GLOBALS['count'] = $item_number . ' ' . $result;
    }else{
        $GLOBALS['count'] = $item_number . ' ' . $results;
    }

}
count_prod();
















?>