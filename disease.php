
<?php 
    include("include/header.php");
    include("include/connection.php");
    $quu= "SELECT * FROM disease ORDER BY id DESC";
    $res=mysqli_query($con,$quu);
    $output="";
    $output .=" ";

    ?>
  
            <div class="blog">
               <div class="row session-title">
                   <h2>Disease & Doctor Advice</h2>
                   <p>Here are the symptoms and treatments for the common paediatric medical conditions.</p>
               </div>
                <div class="container">
                    <div class="row">
                                <?php
                                if(mysqli_num_rows($res)<1){
                                    $output .="
                                    <tr>
                                        <td  class='text-center'>No Job Available.</td>
                                    </tr>
                                    "
                                    ;
                                }
                                while($row = mysqli_fetch_array($res)){
                                    $id=$row['id'];
                                    $output .="
                                    <div class='col-md-6 col-sm-12'>

                                    <div class='blog-singe no-margin row'>

                                    <div class='col-sm-5 blog-img-tab'>
                                    <img src=assets/".$row['image']." width='290' height='200' >
                                </div>
                                <div class='col-sm-7 blog-content-tab'>
                                    <h2>".$row['title']."</h2>
                                   
                                    <p class='blog-desic'>".$row['description']."  </p>
                                    <a href='disease_details.php?id=$id'>Read More <i class='fas fa-arrow-right'></i></a>
                                </div>
                                        
                                    </div>
                            </div>

                                    ";
                                }
                               
        
                                    echo $output;
        
                                
                                ?>
                           
                       
                    </div>
                </div>
            </div>
        
        <!-- ######## Blog End ####### -->
        
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