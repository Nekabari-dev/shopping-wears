<?php


require "header.php";


?>


<div class="row">
    <div class="col-12">
        <div class="card bg-white">
            <div class="card-header h3 text-dark">
                Categories
                <button class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-modal">
                    + Create Category
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                                    <tr>
                                        <td>#1</td>
                                        <td>poco</td>
                                        <td><button value="#" class="btn btn-primary"><i class="bx bx-pencil" data-bs-toggle="modal" data-bs-target="#package-# "></i></button></td>

                                        <td>
                                            <button value="#" class="btn btn-danger delete-btn">
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





        <div class="modal fade" id="package-#">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header h3 text-dark">
                        Edit Category
                        <button class="btn btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="#" />

                            <div class="form-group my-2">
                                <label class="form-label">
                                    Name
                                </label>
                                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" />
                            </div>



                            <div class="form-group m-3">
                                <button name="edit" class="btn btn-primary">
                                    Edit Category
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



<div class="modal fade" id="create-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header h3 text-dark">
                Create Category
                <button class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">

                    <div class="form-group my-2">
                        <label class="form-label">
                            Name
                        </label>
                        <input type="text" name="name" class="form-control" />
                    </div>





                    <div class="form-group m-3">
                        <button name="create" class="btn btn-primary">
                            Create Category
                        </button>
                    </div>
                </form>
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
                text: "Once deleted, you will not be able to recover this category!",
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
            url: 'dc.php',
            data: {
                delete: true,
                id: id
            },
            success: function(response) {
                swal('Great', 'Category Deleted', 'success')
                    .then(() => {
                        location.replace('categories')
                    });
            },
            error: function() {
                swal('Oops', 'An error occurred while deleting', 'error');
            }
        });
    }
</script>