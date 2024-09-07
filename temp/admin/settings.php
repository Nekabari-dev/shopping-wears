<?php


require "header.php";
include 'settings_code.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="row">
    <div class="col-12">
        <div class="card bg-white">
            <div class="card-header h3 text-dark">
                Change password
            </div>
            <div class="card-body">
                    <form method="post">
                        <div class="form-group mb-3">
                            <label class="form-label">New password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter new password" required/>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Confirm password</label>
                            <input type="password" name="cpassword" class="form-control" placeholder="Re-enter password" required/>
                        </div>
                        <div class="m-3">
                            <button type="submit" class="btn btn-primary" name="change">
                                Change password
                            </button>
                            <?php if(isset($error)) echo $error; ?>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>


<?php
require "footer.php";

?>



</body>
</html>
