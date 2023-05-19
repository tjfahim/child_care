<?php 
    include("../include/connection.php");

   session_start();
 
if(isset($_POST['update'])){
    $pid=$_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $solve = $_POST['solve'];
    // $image = $_POST['image'];
    $folder = "../assets/images";
$image_file=$_FILES['image']['name'];
 $file = $_FILES['image']['tmp_name'];
 $path = $folder . $image_file;  
 $target_file=$folder.basename($image_file);
 $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//Allow only JPG, JPEG, PNG & GIF etc formats
// if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "png" && $imageFileType != "jpeg"
// ) {
//  $error[] = 'Sorry, only JPG, JPEG & PNG files are allowed';   
// }
//Set image upload size 
    if ($_FILES["image"]["size"] > 1048576) {
   $error[] = 'Sorry, your image is too large. Upload less than 1 MB KB in size.';
}
if(!isset($error))
{
move_uploaded_file($file,$target_file); 
$query=
"UPDATE disease SET title='$title',description='$description',solve='$solve',image='$image_file',date=NOW() WHERE id='$pid'";
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
                    <h4 class="my-2">Edit</h4>
                    <form action="" method="post" class="py-2" enctype="multipart/form-data">

                    <?php
                    $id=$_GET['id'];
                        $qu= "SELECT * FROM disease WHERE id='$id'";
                        $res=mysqli_query($con,$qu);
                        $ro=mysqli_fetch_array($res);
                    
                        ?>

                      


                   <div class="form-group">
                            <label for="fname">Title </label>
                            <input type="text" name="title" class="form-control" autocomplete="off" placeholder="Enter Title" value="<?php echo $ro['title'];?>" required>
                        </div>
                        <div class="form-group">
                           <p><label for="description">Description</label></p> 
                            <input type="text" name="description" class="form-control"   placeholder="Enter Description" value="<?php echo $ro['description'];?>"></input>
                            
                        </div>  
                        <div class="form-group">
                           <p><label for="solve">Control Description</label></p> 
                            <input type="text" name="solve" class="form-control"   placeholder="Enter Control Description" value="<?php echo $ro['solve'];?>"></input>
                            
                        </div>  

                        <div class="form-group">
                            <input type="file" class="" name="image" >
                            <!-- <span style=""></span> -->
                        </div>    
                        <div class="col-md-3" style="margin-left: -16px;"><input type="submit" name="update" class="btn btn-success">                    

                        
                    
               </form>
              
            </div>
        </div>
    </div>
    
</body>
</html>



