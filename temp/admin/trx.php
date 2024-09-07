<?php


require "header.php";


?>


<div class="row">
    <div class="col-12">
        <div class="card bg-white">
            <div class="card-header h3 text-dark">
                Transactions
                <!-- <button class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-modal">
                    + Create Category
                </button> -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Amount</th>
                                <th>Address</th>
                                <th>Status</th>
                                <!-- <th>Edit</th> -->
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                     

                                    <tr>
                                        <td>1</td>
                                        <td>Test</td>
                                        <td>test@test.com</td>
                                        <td>xxxx</td>
                                        <td>₦200</td>
                                        <td>damn</td>
                                        <td>active</td>
                                      
                                        <td>
                                            <button value="<?php echo $id; ?>" class="btn btn-danger delete-btn" onclick="confirmDelete(<?php echo $id; ?>)">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </td>

                                    </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require "footer.php";
?>


<script>
    function confirmDelete(id) {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this Transaction!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    deletePackage(id);
                }
            });
    }

    function deletePackage(id) {
        $.ajax({
            type: 'POST',
            url: 'dt.php',
            data: {
                delete: true,
                id: id
            },
            success: function(response) {
                swal('Great', 'Transaction Deleted', 'success')
                    .then(() => {
                        location.replace('trx')
                    });
            },
            error: function() {
                swal('Oops', 'An error occurred while deleting', 'error');
            }
        });
    }
</script>