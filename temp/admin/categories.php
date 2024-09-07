<?php


require "header.php";


?>

<style>
    input[name='search']{
        height: 30px;
        width: 20%;
        border:1px solid #f2f2f2;
        border-radius:3px;
        padding:10px;
        background-color:transparent;
    }
    </style>

<p style="text-align:right;"><a href="new_prod.php" style="color:black;font-family:arial black;">+ Add To New Category</a></p>

<div class="row">
    <div class="col-12">
        <div class="card bg-white">
            <div class="card-header h3 text-dark">
                Categories
                <button class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-modal">
                    + Add Category
                </button>
                
            </div>
            
            
            <div class="card-header text-dark">
                <form method="POST">
                    <label for="search">Search:</label>
                    <input type="text" name="search" required>
                </form>    
            </div>
            
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php include 'categories_code.php'; ?>
                            
                        </tbody>
                    </table><br>
                    <?php include 'page_split.php'; ?>
                </div>
                <?php if(isset($categ_messg)) echo $categ_messg; ?>
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
                            Category Name
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




























