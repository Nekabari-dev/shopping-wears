<?php


require "header.php";


if (isset($_POST['delete'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['id']);

    $delete = mysqli_query($conn, "DELETE FROM products WHERE id='$delete_id'");
    
    if ($delete) {
        ?>
        <script>
            swal('Great', 'Product Deleted', 'success')
                .then(() => {
                    location.replace('products')
                });
        </script>
        <?php
    } else {
        ?>
        <script>
            swal('Oops', 'An error occurred while deleting', 'error');
        </script>
        <?php
    }
}
?>
