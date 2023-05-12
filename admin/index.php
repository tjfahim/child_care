<?php 
   session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Admin Dashboard</title>

    <link rel="shortcut icon" href="../assets/images/fav.jpg" />
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/fontawsom-all.min.css" />
    <link
      rel="stylesheet"
      href="../assets/plugins/slider/css/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="../assets/plugins/slider/css/owl.theme.default.css"
    />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>
<body>
    
    <?php 
    include("../include/header.php");
    include("../include/connection.php");
    
    ?>

    <div class="container-fluid" >
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px;" >
                <?php
                    include('sidenav.php');
                ?>  
                </div>
                <div class="col-md-10" style="margin-top: 100px;">
                    <h4 class="my-2">Admin Dashboard</h4>

                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>