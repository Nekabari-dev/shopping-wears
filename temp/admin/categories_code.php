<?php 

require "../config.php";


function category() {
    
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
            $prod_type = $fetch_prod['product_type'];

            ?>

                <tr>
                <td>#<?php echo $id; ?></td>
                <td><?php echo $prod_name; ?></td>
                <td><?php echo $prod_type; ?></td>

                <td>
                    <form method="POST">
                        <button name="delete" value="#" class="btn btn-danger delete-btn">
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
category();





if (isset($_POST['create'])) {
    add_categ();
}

function add_categ() {

    global $conn;

    $name = $_POST['name'];

    $insert = " INSERT INTO products (product_type) VALUES ('$name') ";
    $insert = mysqli_query($conn, $insert);

    $GLOBALS['categ_messg'] = "<p style='color:white;text-align:center;font-family:arial black;'><b>New Category Created ✅ </b></p>";
    header("Refresh: 2");

}








?>