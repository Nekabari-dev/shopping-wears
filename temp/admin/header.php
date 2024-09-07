<?php


require "../config.php";


include "variables.php";

function admin_name() {

  global $conn;

  $select = "SELECT * FROM admin_login";
  $select = mysqli_query($conn, $select);
  if (mysqli_num_rows($select) > 0) {
      $fetch_name = mysqli_fetch_assoc($select);
      $GLOBALS['name'] = $fetch_name['username'];
  }else{
      $GLOBALS['name'] = "Not Found";
  }
}
admin_name();



?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Hopeville - Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../logo/logo.png" />
    

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <script src="https://cdn.tiny.cloud/1/i22tdlr7im2hw09t8ierwwshh463aut8p1gnc58wai95u18g/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Include the Froala Editor CSS file -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.13/css/froala_editor.pkgd.min.css">

<!-- Include the Froala Editor JS file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.13/js/froala_editor.pkgd.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="row d-md-none">
      <div class="mx-auto">
      <center>
      <img src="../logo/1.png" style="width:130px;"/>
      </center>
      </div>
         
      </div>
    <div class="layout-wrapper layout-content-navbar">
    
      <div class="layout-container">
        <!-- Menu -->
       
        

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo justify-content-center">
            <center>
              <span class="app-brand-logo demo">
              <img src="../logo/logo.png" style="width:90px;"/>
              </span>
             
            </center>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-3">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="admin_home.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle" style="color:white;"></i>
                <div data-i18n="Analytics" style="color:white;">Overview</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="products.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout" style="color:white;"></i>
                <div data-i18n="Analytics" style="color:white;">Products</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="categories.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout" style="color:white;"></i>
                <div data-i18n="Analytics" style="color:white;">Categories</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="trx.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout" style="color:white;"></i>
                <div data-i18n="Analytics" style="color:white;">Transactions</div>
              </a>
            </li>

            <!-- Layouts -->
          

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text" style="color:white;">Security</span>
            </li>
            <li class="menu-item">
                  <a href="settings.php" class="menu-link">
                    <div data-i18n="Account" style="color:white;">Account</div>
                  </a>
                </li>
           
            
           
              </ul>
            </li>
          
        

           
          
           
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  
                  <span>Welcome, <b><?php if(isset($name)) echo $name; ?></b></span>
                </div>
              </div>
              <!-- /Search -->

           
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid flex-grow-1 container-p-y">
              <!-- <style>
                .card{
                  background:  #6c007c;
                }
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
                h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1{
                  color:#fff;
                }
                .table:not(.table-dark) th {
                  color: #fff;
                }
              </style> -->

              <style>

/*  .card {*/
/*    background: #004B70;*/
/*  }*/

/*  .btn-primary {*/
/*    background-color: #004B70!important;*/
/*    border-color: #004B70!important;*/
/*  }*/

/*  .bg-primary,*/
/*  .app-brand .layout-menu-toggle {*/
/*    background: #004B70!important;*/
/*  }*/

/*  .btn {*/
/*    box-shadow: none !important;*/
/*  }*/

/*  html,*/
/*  body {*/
/*    overflow-x: hidden;*/
/*  }*/

/*  h6,*/
/*  .h6,*/
/*  h5,*/
/*  .h5,*/
/*  h4,*/
/*  .h4,*/
/*  h3,*/
/*  .h3,*/
/*  h2,*/
/*  .h2,*/
/*  h1,*/
/*  .h1 {*/
/*    color: #fff;*/
/*  }*/

/*  .table:not(.table-dark) th {*/
/*    color: #fff;*/
/*  }*/
</style>

  
            <style>
  .layout-wrapper{
    background-color: white;
    color:white;
  }

  .card, .layout-navbar, #layout-menu, .footer, .modal-content{
    background-color: #004B70 !important;
    color:white ;
  }
  a.layout-menu-toggle{
    background: #00cb00 !important;
  }
  .text-primary{
    color: #00cb00 !important;
  }
  .btn-primary{
    background-color:#00cb00 !important;
    border: none;
  }
  .btn-outline-primary{
    border-color: #00cb00 !important;
    color: #00cb00 !important;
  }
  .btn-outline-primary:hover{
    background-color: #00cb00 !important;
    color: #fff !important;
  }
  .btn{
    box-shadow: none !important;
  }
  ul .dropdown-menu{
    background: #004B70;
    color:#fff
  }
</style>


<style>
th {
color: white !important;
}
tr {
color: white !important;
}
h3 {
color: white !important;
}
.text-dark {
color: white !important;
}
.form-label {
color: white !important;
}

.dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
color: white;
}



.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
cursor: default;
color: white !important;
border: 1px solid transparent;
background: transparent;
box-shadow: none;
}








</style>