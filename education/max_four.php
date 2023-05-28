
<?php 
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: ../student_login.php");
  exit;
}
include("../include/connection.php");

    $quu= "SELECT * FROM education WHERE sub_categories=29 ";
    $res=mysqli_query($con,$quu);
    $q1= "SELECT * FROM education WHERE sub_categories=30 ";
    $r1=mysqli_query($con,$q1);
    $quu2= "SELECT * FROM education WHERE sub_categories=31 ";
    $res2=mysqli_query($con,$quu2);
    $output="";
    $output .=" ";
    $output1="";
    $output1 .=" ";
    $output2="";
    $output2 .=" ";

    ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Child Care System</title>

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
    <header>
      <div id="nav-head" class="header-nav">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-12 mt-4">
              <h3>Child Care System</h3>
            </div>
            <div id="menu" class="col-md-9 d-none d-md-block nav-item">
              <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="#Short">Short stories</a></li>
                <li><a href="#Animals">Animals</a></li>
                <li><a href="#Flowers">Flowers</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- ################# Services Starts Here#######################--->

    <section class="our-services" id="Short">

      <div class="row session-title">
        <h2>Short Stories</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="service-box">
              <div class="d-flex">
                <div class="icon"></div>
                <div class="det">
                <?php
                           
                           while($row = mysqli_fetch_array($res)){
                               $output .="
                               <h4  style='color: green'>".$row['title']."</h4>
                               <p>".$row['description']."<br/><br/><br/>
                  </p>
                               ";
                           }
                               echo $output;
   
                           
                           ?>
               
                 
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>
    </section>

    <section class="health-care" id="Animals">
      <div class="row session-title">
        <h2>Animals</h2>
      </div>
      <div class="container">
        <div class="row">
        <?php
                           
                           while($row = mysqli_fetch_array($r1)){
                               $output1 .="
                               <div class='col-md-3 col-sm-6 vd'>

                              <img src='../assets/images".$row['image']."' >

            <h4>".$row['title']."</h4>
            </div>

                               ";
                           }
                               echo $output1;
   
                           
                           ?>
        
          
       
        </div>
      </div>
    </section>
    <section class="our-services" id="Flowers">
      <div class="row session-title">
        <h2>Flowers</h2>
      </div>
      <div class="container">
        <div class="row">
        <?php
                           
                           while($row = mysqli_fetch_array($res2)){
                               $output2 .="
                               <div class='col-md-3 col-sm-6 vd'>

                              <img src='../assets/images".$row['image']."' >

            <h4>".$row['title']."</h4>
            </div>

                               ";
                           }
                               echo $output2;
   
                           
                           ?>
       
        </div>
      </div>
    </section>

    <!-- ################# Footer Starts Here#######################--->

    <div class="copy">
      <div class="container">
        <a href="https://www.pundrauniversity.com/"
          >2023 &copy; All Rights Reserved | Designed and Developed by
          PundraUniversity</a
        >

        <span>
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.facebook.com/"
            ><i class="fab fa-facebook-f"></i
          ></a>
        </span>
      </div>
    </div>
  </body>

  <script src="../assets/js/jquery-3.2.1.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/plugins/slider/js/owl.carousel.min.js"></script>
  <script src="../assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

  <script src="../assets/js/script.js"></script>
</html>
