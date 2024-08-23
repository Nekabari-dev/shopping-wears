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

    $select_prod = "SELECT * FROM products ";
    $select_prod = mysqli_query($conn, $select_prod);

    if (mysqli_num_rows($select_prod) > 0) {

        while($fetched_det = mysqli_fetch_assoc($select_prod)) {
            $name = $fetched_det['product_name'];
            $aval_sizes = $fetched_det['aval_sizes'];
            $price = $fetched_det['product_price'];
            $price_currency = $price;
            $img1 = $fetched_det['image1'];
            $details = $fetched_det['product_det'];
            $prod_id = $fetched_det['prod_id'];

            ?>
                <!-- working -->
                <?php 
                    $GLOBALS['prod_id'] = $prod_id;
                    $sensitiveData = $prod_id;
                    $encodedData = base64_encode($sensitiveData);

                    $prod_id = urlencode($encodedData);
                ?>
                
                <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card-m">
                <div class="product-thumb">
                <a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id; ?>">
                <img src="uploads/<?php echo $img1; ?>" alt>
                </a>
                <div class="product-lavels">
                </div>
                <div class="add-product"><a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id; ?>"><i class="flaticon-plus"></i></a></div>
                </div>
                <div class="product-body">
                <h5 class="product-title"> <a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id; ?>"><?php echo $name; ?></a> </h5>
                <div class="product-price">
                <ins class="new-price"><?php echo '₦'.$price_currency; ?></ins>
                </div>
                <div class="product-actions">
                <a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id; ?>"><i class="flaticon-search"></i></a>
                <a href="cart.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id; ?>"><i class="flaticon-shopping-cart"></i></a>
                </div>
                </div>
                </div>
                </div>

            <?php
        }

    }else{
        $GLOBALS['upload_error'] = "File Not Found";
    }

}
fetch_products($userid);









?>