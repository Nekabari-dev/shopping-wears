
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

    <title>Login</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../logo/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment  icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="shortcut icon" href="../logo/5.png" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="../logo/5.png">
 

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
  </head>
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

    button[name='login'] {
      width: 100%;
      border:none;
      background-color:transparent;
      color:white;
    }
    .logo{
      /* border:2px solid black; */
      height:110px;
      width: 115px;
      border-radius:50%;
      background-color:black;
    }
    .logo img{
      width: 100%;
      height:100%;
      border-radius:50%;
      object-fit:contain;
    }
    </style>
<link rel="stylesheet" href="css/vendors/uikit.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/plans.css">
    <link rel="stylesheet" href="css/investment.css">
    <link rel="stylesheet" href="css/index-min.css">
    <link rel="stylesheet" href="css/min.css">
    <link rel="stylesheet" href="css/team.css">
  <body>
    <!-- header content begin -->
    
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
 
 
 

 
        <!-- header content end -->
    <!-- Content -->
<?php include 'login_code.php'; ?>
    <div class="container-xxl light-bg">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <!-- <a href="../logo/logo.png" class="app-brand-link gap-2"> -->
                  <div class="logo"><img src="../logo/logo.png" alt=""></div>
                <!-- </a> -->
              </div>
              <!-- /Logo -->
              

              <form id="formAuthentication" class="mb-3"  method="POST">
                <div class="mb-3">
                  <label for="uname" class="form-label">Username</label>
                  <input Required
                    type="text"
                    class="form-control"
                    id="email"
                    name="uname"
                    value=''
                    placeholder="user name"
                    
                  />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input Required type="password" class="form-control" id="password" name="password" placeholder="Password" />
                </div>

                

                <button name="login"><a class="btn btn-primary d-grid w-100">Continue</a></button>
                <!-- <button class="btn btn-primary d-grid w-100">Continue</button> 
                -->
                <?php if(isset($error)) echo $error; ?>
              </form>

              <!-- <p>
                <span class="uk-text-small">Don't have an account? <a class="uk-button uk-button-text" href="register">Register</a></span>               
              </p> -->
              <!-- <p>
                <span class="uk-text-small float-end"><a class="uk-button uk-button-text" href="#">Forgot password</a></span>               
              </p> -->
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
<!--  -->
