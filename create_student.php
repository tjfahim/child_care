<?php 
include('include/connection.php');

if(isset($_POST['create'])){
    $fullname = $_POST['fname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $error=array();


    if($password != $cpassword){
        $error['e']= "Password Does not match";

    }
    if($username){
        $query = "SELECT  username FROM student WHERE username ='$username'";
        $result = mysqli_query($con,$query);
        if (mysqli_num_rows($result) > 0) {
            $error['e'] = "Sorry... username already taken"; 	
        }
    }
    // if(preg_match('/^[0-9]{11}+$/', $phone)) {
    //         if($phone[0]!='0' && $phone[1]!='1'){
    //             $error['e']= "Start with 01";
    //         }
    // }else $error['e']= "Invalid phone number";

   

    if(count($error)==0){
      
    $query="INSERT INTO student(full_name,username,email,phone,password,date) VALUES ('$fullname','$username','$email','$phone','$password',NOW())";
    $result=mysqli_query($con,$query);
    if($result){
        session_start();
        $_SESSION['student']=$username;
        
        header("location:student_login.php");

    }else{
        echo"<script>alert('Failed')</script>";
    }
    echo 'no error';

    }
 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account as Student</title>
</head>
    <?php 
        include('include/header.php')
    ?>
    
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 jumbotron" style="margin-top: 90px;">
                    <h4 class="text-center" style="margin-top: -35px;">Student Registration Form</h4>
                    <form action="" method="post" class="py-2" enctype="multipart/form-data">
                    <?php
                            if(isset($error['e'])){
                                $sh=$error['e'];
                                $show="<h4 class='alert alert-danger'>$sh</h4>";
                                echo $show;
                                
                            }
                        
                            ?>
                   
                        <div class="form-group">
                            <label for="fname">Full Name</label>
                            <input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter First Name" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>" required>
                        </div>
                        <div class="form-group">
                            <label for="uname">Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username" value="<?php if(isset($_POST['uname'])){echo $_POST['uname'];}?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" required>
                        </div>
                     
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Enter Password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>" required>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" name="cpassword" class="form-control" placeholder="Enter Password" value="<?php if(isset($_POST['cpassword'])){echo $_POST['cpassword'];}?>" required>
                        </div>
                       
                        <input type="submit" name="create" class="btn btn-success">
                        <div>Already have an accout? <a href="student_login.php">Login</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>