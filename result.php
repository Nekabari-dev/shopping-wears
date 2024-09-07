<!doctype html>
<html lang="en">
    <head>
        <title>Result</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/product/logo.png" type="image/png" sizes="20x20">
        
        <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
        
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        
        <link rel="stylesheet" href="assets/css/swiper.css">
        
        <link rel="stylesheet" href="assets/font/flaticon.css">
        
        <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/font-awesome/css/font-awesome.min.css">
</head>
<body>
    
    <!-- include statemant -->
<?php 
    include 'adding.php';
 
if(isset($_GET['id'])) {
     $id = $_GET['id']; 
     $GLOBALS['id'] = $id;
    } else {
        $GLOBALS['id'] = "0";   
        // echo "ID not found in the URL";
}
    
    
    
?>

<style>
    li h3{
        color:white;
    }
    table {
    border-collapse: collapse;
    width: 50%;
    }

    th, td {
    padding: 8px;
    text-align: center;
    border: none;
    }
    td{
        text-align:left;
    }
    td p{
        font-family:calibri body;
        font-size:20px;
    }
    .home a{
        color:black;
        font-weight:bold;
        font-size:16px;
        font-family:calibri body;
    }
</style>


    <div class="header-area" style="background-color:black;">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo d-flex justify-content-between align-items-center h-100">
                        <img style="height:100%;width:60%;object-fit:contain;" src="assets/images/product/logo.png" alt="">
                    </div>
                </div>
                
                <div style="display:flex;align-items:center;justify-content:center;" class="col-xl-7 col-lg-8 col-md-8 col-sm-6 col-xs-6">
                    <nav class="main-nav">                
                        <ul>
                            <li><h3>View Search Results <i class="fa fa-search"></i></h3></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    
<p class="home"><a href="index.php?id=<?php echo $id; ?>">Back Home <i class="fa fa-arrow-left"></i></a></p>    
    
<center>
    
    <table>
    
        <tr>
            <th style="border:none;">Your Search Results <i class="fa fa-search"></i></th>
        </tr>
    
        <!-- search result -->
         <?php include 'result_code.php'; ?>

    </table>

</center>







</body>
</html>
