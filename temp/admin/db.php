<?php

require "header.php";


if (isset($_POST['delete'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['id']);

    $delete = mysqli_query($conn, "DELETE FROM blogs WHERE id='$delete_id'");
    
    if ($delete) {
        ?>
        <script>
            swal('Great', 'Post Deleted', 'success')
                .then(() => {
                    location.replace('blogs')
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
