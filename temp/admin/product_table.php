<?php 

include_once '../config.php';


function products() {

    global $conn;

    $search = $_POST['search'] ?? '' ;

    $products_per_page = 1; 
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1; 
    $offset = ($current_page - 1) * $products_per_page; // Calculate offset

    $select = "SELECT * FROM products WHERE product_name LIKE '%$search%' LIMIT $offset, $products_per_page ";
    $select = mysqli_query($conn, $select);
    if(mysqli_num_rows($select) > 0) {
        while($fetch_prod = mysqli_fetch_assoc($select)) {
            $id = $fetch_prod['prod_id'];
            $prod_name = $fetch_prod['product_name'];
            $description = $fetch_prod['product_det'];
            $categ = $fetch_prod['product_type'];
            $price = $fetch_prod['product_price'];
            $quantity = $fetch_prod['quantity'];


            ?>

                <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $prod_name; ?></td>
                <td><?php echo $description; ?></td>
                <td><?php echo $categ; ?></td> 
                <td>₦ <?php echo $price; ?></td>
                <td><?php echo $quantity; ?></td>
                
                <td>
                    <form method="POST">
                        <button name="delete"  class="btn btn-danger delete-btn">
                            <i class="bx bx-trash"></i>
                        </button>
                    </form>
                    <?php 
                        if(isset($_POST['delete'])) {
                            $delete = "DELETE FROM products WHERE prod_id = '$id' "; 
                            $delete = mysqli_query($conn, $delete);
                        }
                    ?>
                </td>
                </tr>

            <?php
        }
    }

}
products();
















?>