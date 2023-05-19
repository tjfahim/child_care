<?php 
    include("../include/connection.php");

   session_start();
 
if(isset($_POST['create'])){
    $categories = $_POST['categorie'];
    $sub_categories = $_POST['scategorie'];
    $title = $_POST['title'];
    $description = $_POST['description'];
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
$query="INSERT INTO education(categories,sub_categories,title,description,image,date) VALUES ('$categories','$sub_categories','$title','$description','$image_file',NOW())";
$result=mysqli_query($con,$query);
if($result)
{
	header("location:education.php");
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
    <title>Education Dashboard</title>

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
                    <h4 class="my-2">Education</h4>
                    <form action="" method="post" class="py-2" enctype="multipart/form-data">

                                   
                    <div class="form-group col-md-5">
                       <label for="categorie">Categorie</label>
                       <select value="" name="categorie" id="">
                       <option value=""> Select Education Category</option>
                        <option value="0">None</option>
                     
                        <?php 
                        $data="SELECT * FROM categories WHERE parent_id='14'";
                        $data=mysqli_query($con,$data);
                        

                        while($cate=mysqli_fetch_array($data))
                        {?>
                        <option value="<?php echo $cate['id']?>"><?php  echo $cate['category_name'] ?></option>
                        <?php } ?>
                       </select>
                     
                    </div>
                   <div class="col-md-3"><input type="submit" class="btn btn-success">                    



<br><br>


                    

<p></p> <label for="scategorie">Sub Categorie</label>
                       <select name="scategorie" id="">
                       <option value="0">Sub Category</option>
                        <option value="0">None</option>
                        <?php 
                        $p_id=$_POST['categorie'];
                        $data="SELECT * FROM categories WHERE parent_id=$p_id";
                        $data=mysqli_query($con,$data);
                        while($cate=mysqli_fetch_array($data))
                        {?>
                        <option value="<?php echo $cate['id']?>"><?php echo $cate['category_name'] ?></option>
                        <?php } ?>
                       </select>

                   <div class="form-group">
                            <label for="fname">Title </label>
                            <input type="text" name="title" class="form-control" autocomplete="off" placeholder="Enter Title" value="<?php if(isset($_POST['title'])){echo $_POST['title'];}?>" required>
                        </div>
                        <div class="form-group">
                           <p><label for="description">Description</label></p> 
                            <textarea  name="description" rows="4" cols="50" placeholder="Enter Description" value="<?php if(isset($_POST['description'])){echo $_POST['description'];}?>" ></textarea>
                            
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



