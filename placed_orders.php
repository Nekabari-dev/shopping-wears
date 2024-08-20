<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>placed orders</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>

<section class="orders">

<h1 class="heading">placed orders</h1>

<div class="box-container">
   <div class="box">
      <p> placed on : <span></span> </p>
      <p> name : <span></span> </p>
      <p> number : <span></span> </p>
      <p> address : <span></span> </p>
      <p> total products : <span></span> </p>
      <p> total price : <span>$/-</span> </p>
      <p> payment method : <span></span> </p>
      <form action="" method="post">
         <input type="hidden" name="order_id" value="">
         <select name="payment_status" class="select">
            <option selected disabled></option>
            <option value="pending">pending</option>
            <option value="completed">completed</option>
         </select>
        <div class="flex-btn">
         <input type="submit" value="update" class="option-btn" name="update_payment">
         <a href="placed_orders.php" class="delete-btn" onclick="return confirm('delete this order?');">delete</a>
        </div>
      </form>
   </div>
   
</div>

</section>

</section>












<script src="../js/admin_script.js"></script>
   
</body>
</html>