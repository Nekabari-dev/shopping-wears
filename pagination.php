<?php 

include_once 'conn.php';

if(isset($_GET['id'])) {
    $userid = $_GET['id'];
    $userid = $userid;
    $GLOBALS['userid'] = $userid;
}else{
    $GLOBALS['userid'] = "0";
}


function pagnation($id) {

    global $conn;

    $products_per_page = 12; 
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1; 
    $offset = ($current_page - 1) * $products_per_page; // Calculate offset

    // Count total products
    $total_result = "SELECT COUNT(*) AS total FROM products ";
    $total_result = mysqli_query($conn, $total_result);

    if(mysqli_num_rows($total_result) > 0) {
        $total_row = mysqli_fetch_assoc($total_result);
        $total_products = $total_row['total'];
        $total_pages = ceil($total_products / $products_per_page); // Calculate total pages
    }



    // Fetch products for the current page
    $query = "SELECT * FROM products LIMIT $offset, $products_per_page";
    $result = mysqli_query($conn, $query);

    ?>

<li>
        <?php 
        // Display first two pages or less
        for ($i = 1; $i <= min(1, $total_pages); $i++) {
            echo "<a style='border:1px solid black;' href='?page=$i'>$i</a> ";
        }

        $next_page = $current_page + 1;

        if ($next_page <= $total_pages) {
            echo "<a style='border:1px solid black;' href='?page=$next_page'>$next_page</a> ";
        }

        if ($total_pages > 3 && $current_page < $total_pages - 1) {
            echo "<b> - - - </b>";
            echo "<a style='border:1px solid black;' href='?page=$total_pages'>$total_pages</a>";
        }
        ?>
    </li>

<?php

}
pagnation($userid);
















?>