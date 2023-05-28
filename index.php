<?php 
   session_start();

    include("include/header.php");
    include("include/slider.php");
     ?>

   

    <!-- ################# Health Care Here#######################--->

    <section class="health-care" id="education">
      <div class="row session-title">
        <h2>Education</h2>
      </div>
      <div class="container">
        <div class="row"> 
        <div class="col-md-3 col-sm-6 vd">
            <img src="assets/images/services/gallery_04.jpg" alt="" />
            <h4>Alphabet</h4>
           
           <a href="education/alphabet.php"> <button class="btn btn-info">
              Readmore <i class="fas fa-arrow-right"></i>
            </button></a>
          </div>
          <div class="col-md-3 col-sm-6 vd">
            <img src="assets/images/services/gallery_01.jpg" alt="" />
            <h4>One to Four Year</h4>
           
           <a href="education/max_four.php"> <button class="btn btn-info">
              Read more <i class="fas fa-arrow-right"></i>
            </button></a>
          </div>
          <div class="col-md-3 col-sm-6 vd">
            <img src="assets/images/services/gallery_02.jpg" alt="" />
            <h4>Five to Eight Year</h4>
           
          <a href="education/max_eight.php">  <button class="btn btn-info">
              Readmore <i class="fas fa-arrow-right"></i>
            </button></a>
          </div>
          <div class="col-md-3 col-sm-6 vd">
            <img src="assets/images/services/gallery_03.jpg" alt="" />
            <h4>Quiz</h4>
            
           <a href="education/quiz.php"> <button class="btn btn-info">
              Readmore <i class="fas fa-arrow-right"></i>
            </button></a>
          </div>
         
        </div>
      </div>
    </section>

    <!-- ################# Services Starts Here#######################--->

    <section class="our-services" id="food">
      <div class="row session-title">
        <h2>Baby Food</h2>
        
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
           
            <div class="service-box">
              <div class="d-flex">
                <div class="icon">
                  <i class="fas fa-capsules"></i>

                </div>
                <div class="det">
                  <b>Zero to One year</b>
                  <p>
                    Wondering what you should give your 1 year old baby? Read the article to get tips
                  </p>
                  <a href="education/max_one.php">  <button class="btn btn-info">
                    Readmore <i class="fas fa-arrow-right"></i>
                  </button></a>
                </div>
              </div>
            </div>
            <div class="service-box">
              <div class="d-flex">
                <div class="icon">
                  <i class="fas fa-user-md"></i>
                </div>
                <div class="det">
                  <b>One to Five year</b>
                  <p>
                    Children feel better when they eat well. During the preschool and kindergarten years, your child should be eating the same foods as the rest of the family.
                  </p>
                  <a href="education/max_five.php">  <button class="btn btn-info">
                    Readmore <i class="fas fa-arrow-right"></i>
                  </button></a>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-md-5 col-sm-12">
            <div class="imagr-box">
              <img src="assets/images/side-image.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--  ************************* Blog Starts Here ************************** -->
    
    <div class="health-care" id="disease">
      <div class="row session-title">
        <h2>Latest Disease treatment</h2>
        <p>
          Here are the symptoms and treatments for the common paediatric medical
          conditions.
        </p>
      </div>
      <div class="container">
        <div class="row"> <?php
                                include("include/connection.php");
                                $quu= "SELECT * FROM disease ORDER BY id DESC LIMIT 2";
                                   $res=mysqli_query($con,$quu);
                                   $output="";
                                   $output .=" ";
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
          <a class="btn btn-primary mt-3" style="margin-left: 45%;" href="disease.php"
                  >Show More <i class="fas fa-arrow-down"></i
                ></a>
        </div>
      </div>
    </div>

    <!-- ######## Blog End ####### -->

    <?php 
    include("include/footer.php");
     ?>