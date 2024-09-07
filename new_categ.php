<?php 

include_once 'conn.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $GLOBALS['id'] = $id;
} else {
    $GLOBALS['id'] = "0";
}



function find_new_categ($myid) {

    global $conn;

    $select = "SELECT * FROM products WHERE product_type NOT IN ('Top', 'Bottom', 'Footwear', 'Native')";
    $result = mysqli_query($conn, $select);
    $myid = 0;

if(mysqli_num_rows($result) > 0) {
    while($fetch_categ = mysqli_fetch_assoc($result)) {
        $categ = $fetch_categ['product_type'];


        $count = "SELECT COUNT(product_name) AS prod_count FROM products 
        WHERE product_type = '$categ' 
        AND product_name IS NOT NULL AND product_name != '' 
        AND aval_sizes IS NOT NULL AND aval_sizes != '' 
        AND product_price IS NOT NULL AND product_price != '' 
        AND product_type IS NOT NULL AND product_type != '' 
        AND quantity IS NOT NULL AND quantity != '' 
        AND image1 IS NOT NULL AND image1 != '' 
        AND image2 IS NOT NULL AND image2 != '' 
        AND image3 IS NOT NULL AND image3 != '' ";

        $count_result = mysqli_query($conn, $count);

        $new_count = "0";
        
        if(mysqli_num_rows($count_result) > 0) {
            $fetch_count = mysqli_fetch_assoc($count_result);
            $new_count = $fetch_count['prod_count'];
        }

        // Create unique category ID for the accordion elements
        $accordionId = "categoryThree-" . $myid;
        $headerId = "categoryHeading" . $myid;

        ?>
        
        <div class="accordion-item">
            <h2 class="accordion-header" id="<?php echo $headerId; ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $accordionId; ?>" aria-expanded="false" aria-controls="<?php echo $accordionId; ?>">
                    <i class="flaticon-children"></i> <?php echo $categ; ?>
                </button>
            </h2>
            <div id="<?php echo $accordionId; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $headerId; ?>" data-bs-parent="#categoryExample">
                <div class="accordion-body">
                    <ul class="sb-category-list">
                        <li><a href="product.php?id=<?php echo $myid; ?>">Total Products</a> <span class="product-amount">(<?php echo $new_count; ?>)</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php
        $myid++;
    }
}

    
}
find_new_categ($id);






















?>