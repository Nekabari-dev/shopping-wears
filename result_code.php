<?php 

if(isset($_GET['id'])) {
    $id = $_GET['id']; 
    $GLOBALS['new_id'] = $id;
   } else {
       // echo "ID not found in the URL";
}

if(isset($_GET['search'])) {
    $id = $_GET['search']; 
    $GLOBALS['search'] = $id;

    $select = "SELECT * FROM products WHERE product_name LIKE '%$search%' OR product_type LIKE '%$search%' ";
        $select = mysqli_query($conn, $select);
        if (mysqli_num_rows($select) > 0) {
        while($row = mysqli_fetch_assoc($select)) {
            $product_name = $row['product_name'];
            $prod_id = $row['prod_id'];

            $sensitiveData = $prod_id;
            $encodedData = base64_encode($sensitiveData);

            $prod_id = urlencode($encodedData);

            ?>
                <tr>
                    <td style="border:none;">
                        <a href="product-details.php?id=<?php echo $new_id; ?>&prod_id=<?php echo $prod_id; ?>">
                            <p style="border-bottom:1px solid #f2f2f2;font-size:15px;"><i class="fa fa-search"></i> <?php echo $product_name; ?></p>
                        </a>
                    </td>
                </tr>
                <?php
        }
    }else{
        echo "Result Not Found";
    }
    unset($_GET['search']);

}else{
    //    echo "ID not found in the URL";
}








?>