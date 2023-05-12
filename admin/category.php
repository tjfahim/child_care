<?php 
    include("../include/connection.php");

   session_start();

   if(isset($_POST['create'])){
    $category = $_POST['cname'];
    $parent = $_POST['pname'];

    $query="INSERT INTO categories(parent_id,category_name) VALUES ('$parent','$category')";
    $result=mysqli_query($con,$query);
    if($result){
        header("location:category.php");
        echo"<script>alert('Successfully created')</script>";

    }else{
        echo"<script>alert('Failed')</script>";
    }

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
    <title>Admin Dashboard</title>

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
                    <h4 class="my-2">Category</h4>
                    <form action="" method="post" class="py-2" >

                   
                   <div class="form-group col-md-5">
                       <label for="pname">Parent Category</label>
                       <select name="pname" id="">
                       <option value="">Parent Category</option>
                        <option value="0">None</option>
                        <?php 
                        $data="SELECT * FROM categories";
                        $data=mysqli_query($con,$data);
                        while($cate=mysqli_fetch_array($data))
                        {?>
                        <option value="<?php echo $cate['id']?>"><?php echo $cate['category_name'] ?></option>
                        <?php } ?>
                       </select>

                       <label for="cname"></label>

                       <input type="text" name="cname" class="form-control" autocomplete="off" placeholder="Enter Category Name" value="<?php if(isset($_POST['cname'])){echo $_POST['cname'];}?>" required>
                   </div>
                   <div class="col-md-3"><input type="submit" name="create" class="btn btn-success">
                   </div>
               </form>
            </div>
        </div>
    </div>
    
</body>
</html>


<?php 
   session_start();

   include("../include/connection.php");
   include("../include/footer.php");


   
 
    ?>
