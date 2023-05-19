<?php 
    include("../include/connection.php");

   session_start();
 
if(isset($_POST['create'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $solve = $_POST['solve'];
   

$ppic=$_FILES["image"]["name"];
$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
$imgnewfile=md5($imgfile).time().$extension;
move_uploaded_file($_FILES["image"]["tmp_name"],"../assets/".$imgnewfile);

if(!isset($error))
{
// move_uploaded_file($file,$target_file); 
$query="INSERT INTO disease(title,description,solve,image,date) VALUES ('$title','$description','$solve','$imgnewfile',NOW())";
$result=mysqli_query($con,$query);
if($result)
{
	header("location:disease.php");
}
else 
{
	echo 'Something went wrong'; 
}
}
		}
      
        if(isset($error)){ 

            foreach ($error as $error) { 
                echo '<div class="message">'.$error.'</div><br>'; 	
            }}
    
   
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Disease Dashboard</title>

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
                    <h4 class="my-2">Disease</h4>
                    <form action="" method="post" class="py-2" enctype="multipart/form-data">

                                   
                    <div class="form-group col-md-5">
                      
                     
             
                    

                   <div class="form-group">
                            <label for="fname">Title </label>
                            <input type="text" name="title" class="form-control" autocomplete="off" placeholder="Enter Title" value="<?php if(isset($_POST['title'])){echo $_POST['title'];}?>" required>
                        </div>
                        <div class="form-group">
                           <p><label for="description">Description</label></p> 
                            <textarea  name="description" rows="4" cols="50" placeholder="Enter Description" value="<?php if(isset($_POST['description'])){echo $_POST['description'];}?>" ></textarea>
                            
                        </div>  
                        <div class="form-group">
                           <p><label for="solve">Control Description</label></p> 
                            <textarea  name="solve" rows="4" cols="50" placeholder="Enter Control Description" value="<?php if(isset($_POST['solve'])){echo $_POST['solve'];}?>" ></textarea>
                            
                        </div>  

                        <div class="form-group">
                            <input type="file" class="" name="image" >
                            <!-- <span style=""></span> -->
                        </div>    

                        
                      </div>
                      <div class="col-md-3"><input type="submit" name="create" class="btn btn-success">                    
                    
               </form>
              
            </div>
        </div>
    </div>
    
</body>
</html>



