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

    $select_prod = "SELECT * FROM products 
    WHERE product_name IS NOT NULL AND product_name != '' 
    AND aval_sizes IS NOT NULL AND aval_sizes != '' 
    AND product_price IS NOT NULL AND product_price != '' 
    AND product_type IS NOT NULL AND product_type != '' 
    AND quantity IS NOT NULL AND quantity != '' 
    AND image1 IS NOT NULL AND image1 != '' 
    AND image2 IS NOT NULL AND image2 != '' 
    AND image3 IS NOT NULL AND image3 != '' LIMIT 12 ";

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
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="product-card-m" id="clickableDiv">
            <div class="product-thumb" style='height:300px;'>
            <a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id; ?>">
            <img style="height:100%; width:100%; object-fit:cover;" src="temp/admin/uploads/<?php echo $img1; ?>" alt>
            </a>
            <div class="product-lavels">
            <span class="sale">sale</span>
            </div>

            <div class="add-product"><a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id; ?>"><i class="flaticon-plus"></i></a></div>
            <div class="color-option">
            <input type="radio" name="color" id="color1" value="red" checked>
            <label for="color1"><span class="c1 p-color"></span></label>
            <input type="radio" name="color" id="color2" value="red">
            <label for="color2"><span class="c2 p-color"></span></label>
            <input type="radio" name="color" id="color4" value="red">
            <label for="color4"><span class="c4 p-color"></span></label>
            </div>
            </div>
            <div class="product-body">
            <h5 class="product-title"> <a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $prod_id; ?>"><?php echo $name; ?></a> </h5>
            <div class="product-price">
            <ins class="new-price"><?php echo '₦'.$price; ?></ins>
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