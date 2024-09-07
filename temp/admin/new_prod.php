<?php


require "header.php";
include 'newProd_logic.php';

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


<div class="row">
    <div class="col-12">
    <div class="card bg-white">
            
            <div class="card-header h3 text-dark">
                Add Products
                <button class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-modal">
                    + Upload Products
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
            <th>Description</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        
        <?php include 'product_table.php'; ?>
                
    </tbody>
</table><br>

<?php if(isset($message)) echo $message; ?>

                </div>
                <?php include 'page_split.php'; ?>
            </div>
        </div>
    </div>
</div>
<br>




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
                                <input type="text" name="name" class="form-control" value="" />
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
                Add Product To New Category
                <button class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">

                <div class="form-group my-2">
                        <label class="form-label">
                            Input New Category Name
                        </label>
                        <input type="text" name="categ" class="form-control" placeholder="Enter Category Name" Required />
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label">
                            Product Name
                        </label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Product Name" Required />
                    </div>

                    <div class="form-group my-2">
                        
                        <input id="price" type="number" name="price" class="form-control" placeholder="Enter Price" Required />
                        
                        <input id="size" type="text" name="size" class="form-control" placeholder="Enter Size" Required />
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label">
                            Quantity
                        </label>
                        <input type="text" name="quantity" class="form-control" placeholder="Qunatity Of Product Availaible For Sale" Required />
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label">
                            Description (Optional)
                        </label>
                        <textarea name="desc" class="form-control" placeholder="Describe Your Product.."></textarea>
                    </div>
                
                    <label class="form-label">
                        Images
                    </label>
                    <div class="form-group my-2">
                
                        <input Required id="sharedWidth" type="file" name="image_01" class="form-control" Required />
                        <input Required id="sharedWidth" type="file" name="image_02" class="form-control" Required />
                        <input Required id="sharedWidth" type="file" name="image_03" class="form-control" Required />
                    </div>


                    <div class="form-group m-3">
                        <!-- <center> -->
                        <button name="update" class="btn btn-primary">
                            Upload Product
                        </button>
                        <!-- </center> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






<?php
require "footer.php";
?>




<style>
    *{
        box-sizing:border-box;
    }
    #price{
        width: 47%;
        float: left;
        margin-top: 6px;
    }
    #size{
        width: 47%;
        float: right;
        margin-top: 6px;
    }
    select {
        width: 100%;
        height: 40px;
        border:none;
        border-radius:7px;
        margin-top: 10px;
        padding:10px;
    }
    #sharedWidth{
        width: 32%;
        float: left;
        padding:10px;  
        margin-right:6px; 
        margin-top:10px;
    }
    button[name='update'] {
        margin-top:20px;
        width: 100%;
    }
</style>
