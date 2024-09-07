<?php

include_once 'conn.php';


if(isset($_GET['id'])) {
    $userid = $_GET['id'];
    $userid = $userid;
    $GLOBALS['userid'] = $userid;
}else{
    $GLOBALS['userid'] = "0";
}



// fetch products
function fetch_products($id) {
    global $conn;
    $prod_search = $_POST['sidebar-search-input'] ?? '';
    $products_per_page = 12;
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($current_page - 1) * $products_per_page;

    // Default query to select products
    $select_prod = "SELECT * FROM products 
    WHERE product_name IS NOT NULL AND product_name != '' 
    AND aval_sizes IS NOT NULL AND aval_sizes != '' 
    AND product_price IS NOT NULL AND product_price != '' 
    AND product_type IS NOT NULL AND product_type != '' 
    AND quantity IS NOT NULL AND quantity != '' 
    AND image1 IS NOT NULL AND image1 != '' 
    AND image2 IS NOT NULL AND image2 != '' 
    AND image3 IS NOT NULL AND image3 != '' 
    AND (product_name LIKE '%$prod_search%' OR product_type LIKE '%$prod_search%')";

    if (isset($_POST['enter']) && $_POST['category-sort'] == '2') {
        $sort_order = $_POST['sort-order'];
        $select_prod .= " ORDER BY product_price $sort_order";
    }    
    
    $select_prod .= " LIMIT $offset, $products_per_page";

    $result = mysqli_query($conn, $select_prod);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['products'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    foreach ($_SESSION['products'] as $fetched_det) {
        $name = $fetched_det['product_name'];
        $aval_sizes = $fetched_det['aval_sizes'];
        $price = $fetched_det['product_price'];
        $price_currency = $price;
        $img1 = $fetched_det['image1'];
        $prod_id = $fetched_det['prod_id'];
        // Encode the product ID for the URL
        $encodedData = base64_encode($prod_id);
        $prod_id_encoded = urlencode($encodedData);
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product-card-m">
                <div class="product-thumb">
                    <a href="product-details.php?id=<?php echo$id; ?>&prod_id=<?php echo $prod_id_encoded; ?>">
                        <img style="height:280px;width:100%;object-fit:cover;" src="temp/admin/uploads/<?php echo $img1; ?>" alt>
                    </a>
                    <div class="product-lavels"></div>
                    <div class="add-product">
                        <a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id_encoded; ?>"><i class="flaticon-plus"></i></a>
                    </div>
                </div>
                <div class="product-body">
                    <h5 class="product-title">
                        <a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id_encoded; ?>"><?php echo $name; ?></a>
                    </h5>
                    <div class="product-price">
                        <ins class="new-price"><?php echo '₦'.$price_currency; ?></ins>
                    </div>
                    <div class="product-actions">
                        <a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id_encoded; ?>"><i class="flaticon-search"></i></a>
                        <a href="cart.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id_encoded; ?>"><i class="flaticon-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
fetch_products($userid);








?>