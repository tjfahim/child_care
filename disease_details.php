
<?php 
    include("include/header.php");
    include("include/connection.php");
    $id=$_GET['id'];

    $quu= "SELECT * FROM disease WHERE id='$id' ORDER BY id DESC";
    $res=mysqli_query($con,$quu);
    $output="";
    $output .=" ";

    ?>

        
    <div class="blog">
    <?php
                           
                                while($row = mysqli_fetch_array($res)){
                                    $output .="
                                    <div class='row session-title'>
            <h2>".$row['title']." </h2><br><br>
            <p>".$row['description']."  </p><br>
            <p><img src=assets/".$row['image']." width='400px' height='250px' ></p>
        </div>
        <div class='container'>
        What to Do:   <br><br>

        <br><br><br><br><br><br>
     </div>

                                    ";
                                }
                               
        
                                    echo $output;
        
                                
                                ?>
                           
        
       
                           </div>
        
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

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>