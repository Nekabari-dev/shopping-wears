<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Upload Product</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>

<?php include 'update_product_code.php'; ?>

<h1 class="header1">UPLOAD PRODUCTS</h1>
<div class="parent-box">
   <div class="left-box">
      <!-- formbox -->
      <form style='border:none;' method="post" enctype="multipart/form-data">
      
      <input type="text" name="name" required class="box" maxlength="100" placeholder="enter product name" value="">
      
      <input id="product_price" type="number" name="price" required class="box" min="0" max="9999999999" placeholder="enter product price" onkeypress="if(this.value.length == 10) return false;" value="">
      
      <input type="text" id="sizes" name="sizes" placeholder="Availaible Sizes Of your Product" class="box" Required>
      
      <select name="categ" id="" required>
         <option value="">Product Type</option>
         <option value="Women Collcetion">Women's Collcetion</option>
         <option value="Men Collection">Men's Collection</option>
         <option value="Kids Collection">Kid's Collection</option>
         <option value="Men Accessories">Men's Accessories</option>
         <option value="Women Accessories">Women's Accessories</option>
         <option value="Shoe Collection">Shoe's Collection</option>
         <option value="Appliances">Appliances</option>
         <option value="Furnitures">Furnitures</option>
         <option value="Bags">Bags</option>
      </select>

      <input type="text" name="amount" placeholder="Quantity Availaible For Sale" required>

      <textarea placeholder="Describe Your Product.." name="details" class="box" required cols="30" rows="10"></textarea>
      
      <span><h2>Upload Three (3) Images Of Your Product</h2></span>
      <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
      <!-- <span>Product Image 02</span> -->
      <input type="file" name="image_02" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
      <!-- <span>Product Image 03</span> -->
      <input type="file" name="image_03" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
      <div class="flex-btn">
         <input type="submit" name="update" class="btn" value="Upload" style='background-color:grey;'>
         <a href="dashboard.php" class="option-btn" style='background-color:white;color:black;border:1px solid black;'>go back</a>
      </div>
   </form>
   </div>
<!-- end of form box -->

   <div class="right-box">
      <h1 class="h1">UPLOAD PRODUCTS</h1>
   </div>


</div>










<style>
   body{
      background-color: white;
   }
   .parent-box{
      /* border: 2px solid black; */
      height: 635px;
   }
   .left-box{
      /* border: 2px solid black; */
      height: 100%;
      width: 50%;
      float: left;
      padding: 20px;
   }
   .h1{
      color:white;
      font-size: 35px;
      font-family: Arial black;
   }
   .header1{
      display: none;
      text-align:center;
      font-family: Arial black;
   }
   .right-box{
      /* border: 2px solid black; */
      height: 100%;
      width: 50%;
      float: left;
      background: rgba(0,0,0,0.5) url('assets/images/product/admin_logo.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-blend-mode: darken;
      display: flex;
      align-items: center;
      justify-content: center;
   }
   .parent-box input{
      width: 100%;
      height: 40px;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
      box-shadow: 0px 5px 5px rgba(0,0,0,0.10);
   }
   .parent-box textarea{
      width: 100%;
      height: 150px;
      margin-top: 10px;
      border-radius: 5px;
      padding: 10px;
      box-shadow: 0px 5px 5px rgba(0,0,0,0.10);
   }
   #product_price{
      width: 48%;
      float: left;
   }
   #sizes{
      width: 48%;
      float: right;
   }

   select{
      width: 100%;
      height: 40px;
      margin-top: 10px;
      border-radius: 5px;
      padding: 10px;
      box-shadow: 0px 5px 5px rgba(0,0,0,0.10);
   }
   .right-box img{
      height: 100%;
      width: 100%;
      object-fit: cover;
   }

   @media screen and (max-width: 300px) {
      .right-box{
         display: none;
      }
      .left-box{
         width: 100%;
      }
      .header1{
      display: block;
      text-align:center;
      font-family: Arial black;
   }
   }

   @media screen and (max-width: 500px) {
      .right-box{
         display: none;
      }
      .left-box{
         width: 100%;
      }
      .header1{
      display: block;
      text-align:center;
      font-family: Arial black;
   }
   }

   @media screen and (max-width: 700px) {
      .right-box{
         display: none;
      }
      .left-box{
         width: 100%;
      }
      .header1{
      display: block;
      text-align:center;
      font-family: Arial black;
   }
   }

   @media screen and (max-width: 900px) {
      .right-box{
         display: none;
      }
      .left-box{
         width: 100%;
      }
      .header1{
      display: block;
      text-align:center;
      font-family: Arial black;
   }
   }


</style>

<script src="../js/admin_script.js"></script>
   
</body>
</html>