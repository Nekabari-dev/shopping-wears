<?php

include_once 'conn.php';

// get id from url
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $decoded_id = base64_decode($id);
    preg_match_all('/[0-9]+/', $decoded_id, $matches);
    $new_id = implode('', $matches[0]);
    $GLOBALS['new_id'] = $new_id;    
} else {
    $GLOBALS['new_id'] = "0";
}


function select_cart_det($cart_id) {

    global $conn;

    $select_from_cart = "SELECT * FROM cart WHERE user_id = '$cart_id' ";
    $select_from_cart = mysqli_query($conn, $select_from_cart);
    if (mysqli_num_rows($select_from_cart) > 0) {
        while($fetch_from_cart = mysqli_fetch_assoc($select_from_cart)) {
            $image = $fetch_from_cart['prod_img'];
            $prod_name = $fetch_from_cart['prod_name'];
            $prod_price = $fetch_from_cart['main_price'];
            $subtotal_price = $fetch_from_cart['prod_price'];
            $quantity = $fetch_from_cart['quantity'];

            ?>

                <tr>
                <td class="image-col">
                <img style="width:100px;height:60px;object-fit:cover;" src="temp/admin/uploads/<?php echo $image; ?>" alt>
                </td>
                <td class="product-col"><a href="product-details.php?id=<?php echo $id; ?>" class="product-title"><?php echo $prod_name; ?></a></td>
                <td class="discount-col"><span class="discount-price"><?php echo '₦'.$prod_price; ?></span></td>
                <td class="quantity-col">
                <div class="quantity">
                <div><?php echo $quantity; ?></div>
                </div>
                </td>
                <td class="total-col"><?php echo '₦'.$subtotal_price; ?></td>
                <td class="delete-col">
                <div class="delete-icon">
                <form method="POST">
                <input type="hidden" name="prod_id" value="<?php echo $fetch_from_cart['prod_id']; ?>">
                <button name="delete" style="border:none; background-color:transparent;"><i class="flaticon-letter-x"></i></button>
                </form>

                <?php
                    if (isset($_POST['delete'])) {
                        $prod_id = $_POST['prod_id'];
                        $delete_item = "DELETE FROM cart WHERE prod_id = '$prod_id' AND user_id = '$cart_id'";
                        mysqli_query($conn, $delete_item);
                    }
                    
                ?>
                </div>
                </td>
                </tr>


            <?php

        }
    }else{
        $GLOBALS['cart_error'] = "<p style='color:red;text-align:center;font-family:arial;'><b>No Item On Your Cart!</b></p>";
    }
}
select_cart_det($new_id);




function sum_details($sum_id) {
    // sum cart details up
    global $conn;

    // check of the user has orders
    $check_order = "SELECT * FROM cart WHERE user_id = '$sum_id' ";
    $check_order = mysqli_query($conn, $check_order);
    if(mysqli_num_rows($check_order) > 0) {

        $select = "SELECT SUM(prod_price) AS total_price FROM cart WHERE user_id = '$sum_id' ";
        $select = mysqli_query($conn, $select);

        if ($select) {
            while($fetch = mysqli_fetch_assoc($select)) {    
                $total_price = $fetch['total_price'];
            }
            $GLOBALS['total_price'] = '₦'.$total_price;
        } else {
            // $GLOBALS['total_price'] = '₦0';
        }
    }else{
        $GLOBALS['total_price'] = '₦0';
    }
    
    // check of the user has orders
    $check_cart = "SELECT * FROM cart WHERE user_id = '$sum_id' ";
    $check_cart = mysqli_query($conn, $check_cart);
    if(mysqli_num_rows($check_cart) > 0) {

        $sub_total = $total_price + 15 +15 +5;
        $sub_total = $sub_total;
        $GLOBALS['sub_total'] = '₦'.$sub_total;
    }else{
        $GLOBALS['sub_total'] = "₦0";
    }
}
sum_details($new_id);











?>