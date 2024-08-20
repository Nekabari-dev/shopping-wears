<?php 

include_once 'conn.php';


// select id details from products
function select_det() {

    global $conn; 

    if(isset($_GET['prod_id'])) {
        $prod_id = $_GET['prod_id'];
        $url_decoded_data = urldecode($prod_id);
        $prod_id = base64_decode($url_decoded_data);
        $GLOBALS['prod_id'] = $prod_id;
    } else {
        // error message
    }

    $select_details = "SELECT * FROM products WHERE prod_id = '$prod_id' ";
    $select_details = mysqli_query($conn, $select_details);
    if (mysqli_num_rows($select_details) > 0) {
        $details = mysqli_fetch_assoc($select_details);
        $GLOBALS['det_type'] = $details['product_type'];
    }else{
        $GLOBALS['det_type'] = "Not Found";
    }
    
}
select_det();


// select related products
function related_products($type_id, $categ) {

    global $conn;
    // get id from url
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $decoded_id = base64_decode($id);
        preg_match_all('/[0-9]+/', $decoded_id, $matches);
        $new_id = implode('', $matches[0]);    
    } else {
        // error message
    }

    $select_related_prod = "SELECT * FROM products WHERE product_type = '$categ' AND prod_id NOT LIKE '$type_id' ";
    $select_related_prod = mysqli_query($conn, $select_related_prod);
    if (mysqli_num_rows($select_related_prod) > 0) {
        while($fetch_related_prod = mysqli_fetch_assoc($select_related_prod)) {
                $rel_name = $fetch_related_prod['product_name'];
                $rel_sizes = $fetch_related_prod['aval_sizes'];
                $rel_price = $fetch_related_prod['product_price'];
                $rel_img1 = $fetch_related_prod['image1'];
                $rel_details = $fetch_related_prod['product_det'];
                $rel_id = $fetch_related_prod['prod_id'];
            ?>
                <?php 
                    
                    $rel_id = $rel_id;
                    $sensitiveData = $rel_id;
                    $encodedData = base64_encode($sensitiveData);
        
                    $url_id = urlencode($encodedData);
                    $encrypted_id = $url_id;
                    $GLOBALS['encrypted_id'] = $encrypted_id;
                
                ?>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6" style="height: 400px; width:25%; float:left; padding:10px;">
                <div class="product-card-m">
                <div class="product-thumb">
                <a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $encrypted_id; ?>">
                <img style="height:220px; width:100%; object-fit:cover;" src="uploads/<?php echo $rel_img1; ?>" alt>
                </a>
                <div class="product-lavels">
                </div>
                <div class="add-product"><a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $encrypted_id; ?>"><i class="flaticon-plus"></i></a></div>
                </div>
                <div class="product-body" style="height:130px;">
                <h5 class="product-title"> <a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $encrypted_id; ?>"><?php echo $rel_name; ?></a> </h5>
                <div class="product-price">
                <ins class="new-price"><?php echo $rel_price; ?></ins>
                </div>
                <div class="product-actions">
                <a href="product-details.php?id=<?php echo $id; ?>&prod_id=<?php echo $encrypted_id; ?>"><i class="flaticon-search"></i></a>
                <a href="cart.php?id=<?php echo $id; ?>&prod_id=<?php echo $encrypted_id; ?>"><i class="flaticon-shopping-cart"></i></a>
                </div>
                </div>
                </div>
                </div>

            <?php
        }
    }else{
        $GLOBALS['unmatched_err'] = "<p style='color:red; font-family:arial black;'><b>No Related Products!</b></p>";
    }

}
related_products($prod_id, $det_type);










?>