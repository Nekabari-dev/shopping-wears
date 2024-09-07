<?php


session_start();
require "../config.php";


?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="dashboard/assets/exella-icon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="icon.png">
 

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--sweet alerts -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    <style>
    
                .btn-primary{
                  background-color: #6c007c !important;
                  border-color: #6c007c !important;
                }
                .bg-primary,.app-brand .layout-menu-toggle{
                  background: #6c007c !important;
                }
                .btn{
                  box-shadow :none !important;
                }
                html,body{
                  overflow-x: hidden;
                }
                </style>
  </head>
  
  
  <link rel="stylesheet" href="css/vendors/uikit.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/plans.css">
    <link rel="stylesheet" href="css/investment.css">
    <link rel="stylesheet" href="css/index-min.css">
    <link rel="stylesheet" href="css/min.css">
    <link rel="stylesheet" href="css/team.css">
  <body>
  
    <!-- Content -->

    <div class="container-xxl light-bg">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card ">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="#" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                   <img src="../logo/1.png" class="logo" width="80px"/>
                  </span>
                  
                </a>
              </div>
              <!-- /Logo -->
              

              <form id="formAuthentication" class="mb-3"  method="POST">
             
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    value=''
                    placeholder="email"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    value=''
                    placeholder="password"
                    required
                  />
                </div>
             
                

                
                <button class="btn btn-primary d-grid w-100" name="register">Continue</button>
                
              </form>

              <p>
                <span class="uk-text-small">Already have an account? <a class="uk-button uk-button-text" href="login">Login</a></span>               
              </p>
              
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

<?php
if(isset($_POST['register'])){
  
     $password=mysqli_real_escape_string($conn,$_POST['password']);
     
     $email=mysqli_real_escape_string($conn,$_POST['email']);
     
     
     //checks if passwords are the same
 
     $check_username=mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");
     if(mysqli_num_rows($check_username)==0){

     
     if(true){
         //hashes the passwords
         $password=password_hash($password,PASSWORD_BCRYPT);
 
         //creates a new mail class with phpmailer
             //$mail = new PHPMailer\PHPMailer\PHPMailer();
             
           
 
    
                
                if(true){

                
                 //checks if emails already exists
                 $query=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email'");
                 if(mysqli_num_rows($query)==0){
                     
                    
                   $ip=$_SERVER['REMOTE_ADDR'];
                   $date=Date("Y-F-jS");
                     //inserts new data in the database
                     $insert=mysqli_query($conn,"INSERT INTO admin (`email`, `password`)VALUES('$email','$password')");
                     
                        
                         
                         
                     }
                     else{
                        echo "
                        <script>
                        swal('Oops','Error storing user details','error');
                        </script>
                     ";
                     }
                 }
                 else{
                    echo "
                        <script>
                        swal('Oops','Email already exists','error');
                        </script>
                     ";
                    
                 }
                }
                else{
                    echo "
                    <script>
                    swal('Oops','Coupon Invalid','error');
                    </script>
                 "; 
                }
                
                
           
     }
   
 
    }
   
 
  

?>
