<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Child Care System</title>

    <link rel="shortcut icon" href="./assets/images/fav.jpg" />
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/fontawsom-all.min.css" />
    <link
      rel="stylesheet"
      href="./assets/plugins/slider/css/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="./assets/plugins/slider/css/owl.theme.default.css"
    />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
  </head>

  <body>
    <header>
      <div id="nav-head" class="header-nav">
        <div class="container">
          <div class="row">
            <div class="col-md-3  mt-4">
              <h3>Child Care System</h3>
            </div>
            <div id="menu" class="col-md-9 d-none d-md-block nav-item">
            <ul class="float-right">
            <?php
            if(isset($_SESSION['admin'])){
                $user=$_SESSION['admin'];
                echo'<li><a href="index.php" >Hello '.$user.'</a></li>
                <li><a href="logout.php">Logout</a></li>';

            }else if(isset($_SESSION['student'])){
              $user=$_SESSION['student'];
              echo'
              
              <li><a href="index.php">Home</a></li>
              <li><a href="#education">Education</a></li>
              <li><a href="#food">Food</a></li>
              <li><a href="#disease">Disease</a></li>
              <li><a href="contact_us.php">Contact</a></li>
              <li><a href="profile.php" >Hello '.$user.'</a></li>
              <li><a href="student_logout.php">Logout</a></li>';

                
            
            }
            else{
                echo '   
                
                <li><a href="index.php">Home</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#food">Food</a></li>
                <li><a href="#disease">Disease</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="student_login.php">Student Login</a></li>
                <li><a href="admin.php">Admin</a></li>';
            }
          
         
              
            ?>
         
        </ul>
            </div>
          </div>
        </div>
      </div>
    </header>