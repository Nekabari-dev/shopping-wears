<?php 

require "../config.php";

function pagination() {
    global $conn;

    $products_per_page = 1; 
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1; 
    $offset = ($current_page - 1) * $products_per_page; 

    // Count total products
    $total_result = "SELECT COUNT(*) AS total FROM products";
    $total_result = mysqli_query($conn, $total_result);

    if (mysqli_num_rows($total_result) > 0) {
        $total_row = mysqli_fetch_assoc($total_result);
        $total_products = $total_row['total'];
        $total_pages = ceil($total_products / $products_per_page); 
    }

    // Fetch products for the current page
    $query = "SELECT * FROM products LIMIT $offset, $products_per_page";
    $result = mysqli_query($conn, $query);
    ?>

    <li>
        <?php 
        // Display first two pages or less
        for ($i = 1; $i <= min(1, $total_pages); $i++) {
            echo "<span style='padding:1px 10px;font-size:13px;background-color:#006080;border:1px solid #004d99;border-radius:4px;'>
            <a style='color:white;' href='?page=$i'>$i</a></span> ";
        }

        $next_page = $current_page + 1;

        if ($next_page <= $total_pages) {
            echo "<span style='padding:1px 10px;font-size:13px;background-color:#006080;border:1px solid #004d99;border-radius:4px;'>
            <a style='color:white;' href='?page=$next_page'>$next_page</a></span> ";
        }

        if ($total_pages > 3 && $current_page < $total_pages - 1) {
            echo "<b> - - - </b>";
            echo "<span style='padding:1px 10px;font-size:13px;background-color:#006080;border:1px solid #004d99;border-radius:4px;'>
            <a style='color:white;' href='?page=$total_pages'>$total_pages</a></span>";
        }
        ?>
    </li>

    <?php
}
pagination();











?>