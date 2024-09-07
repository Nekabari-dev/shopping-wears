<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../logo/logo.png" />
</head>
<body>

<?php


require "header.php";

include 'home_code.php';

?>


<div class="container-fluid">
    <div class="row">
        <div class="col my-2">
            <div class="card">
                <div class="card-body text-white">
                    <strong>
                        <small>Total Sales</small>
                        <h2 class="py-2 text-white">
                        ₦ 0
                        </h2>
                    </strong>



                </div>
            </div>
        </div>
    </div>


    <div class="row">

    <div class="col-6 col-lg-4 my-2">
            <div class="card text-white h-100">
                <div class="card-body">

                    <small>Products</small>
                    <strong>
                        <h3 class="py-2 text-white">
                         <?php if(isset($products)) echo $products; ?>
                        </h3>
                    </strong>
                </div>
            </div>

        </div>

        <div class="col-6 col-lg-4 my-2">
            <div class="card text-white h-100">
                <div class="card-body">

                    <small>Categories</small>
                    <strong>
                        <h3 class="py-2 text-white">
                        <?php if(isset($total_categ)) echo $total_categ; ?>
                        </h3>
                    </strong>
                </div>
            </div>

        </div>

        <div class="col-6 col-lg-4 my-2">
            <div class="card text-white h-100">
                <div class="card-body">

                    <small>Transactions</small>
                    <strong>
                        <h3 class="py-2 text-white">
                        ₦ 0
                        </h3>
                    </strong>
                </div>
            </div>

        </div>

        

    </div>
</div>




<?php
require "footer.php";
?>




</body>
</html>
