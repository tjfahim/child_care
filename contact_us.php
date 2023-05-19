<?php 
    include("include/connection.php");

 
if(isset($_POST['create'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['msg'];
   
    
$query="INSERT INTO message(name,email,mobile,message,date) VALUES ('$name','$email','$mobile','$message',NOW())";
$res=mysqli_query($con,$query);
if($res)
{
	// header("location:contact_us.php");
  echo '<div class="text-success">Message Send Successfully</div>'   ;

}
else 
{
	echo 'Something went wrong'; 
}
}
		
include("include/header.php");

?>

       <!--  ************************* Page Title Starts Here ************************** -->
       
               <div class="page-nav no-margin row">
                   <div class="container">
                       <div class="row">
                           <h2>Contact Us</h2>
                           <ul>
                               <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                               <li><i class="fas fa-angle-double-right"></i> Contact Us</li>
                           </ul>
                       </div>
                   </div>
               </div>
       
    <!-- ######## Page  Title End ####### -->
       
      <div style="margin-top:0px;" class="row no-margin">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.2863983416405!2d89.34683721432135!3d24.92231154891508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fcff6dad46983f%3A0x32606b40b622acdb!2sPundra%20University%20of%20Science%20and%20Technology%20(PUB)!5e0!3m2!1sen!2sbd!4v1674181385046!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       


      </div>

      <div class="row contact-rooo no-margin">
        <div class="container">
           <div class="row">
               
          
            <div style="padding:20px" class="col-sm-6">
            <form action="" method="post" >

    
            <h2 style="font-size:18px">Contact Form</h2>
                <div class="row">
                    <div style="padding-top:10px;"  class="col-sm-3"><label>Enter Name :</label></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Email Address :</label></div>
                    <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Mobile Number:</label></div>
                    <div class="col-sm-8"><input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Enter  Message:</label></div>
                    <div class="col-sm-8" >
                      <textarea rows="5" placeholder="Enter Your Message" name="msg" class="form-control input-sm"></textarea>
                    </div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">

                     <button class="btn btn-info btn-sm" type="submit" name="create" >Send Message</button>
                    </div>
                </div>

                </form>
            </div>
             <div class="col-sm-6">
                    
                  <div style="margin:50px" class="serv"> 
                
               
             
                              
              
          <h2 style="margin-top:10px;">Address</h2>

    Pundra University <br>
    Rangpur Road<br>
    Bogura District<br>
    Phone:+88 0159669599<br>
    Email:info@pub.in<br>
    Website:www.pundrauniversity.com<br>

 
       
            
                
                
              
           </div>    
                
             
         </div>

            </div>
        </div>
        
      </div>
    
        


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