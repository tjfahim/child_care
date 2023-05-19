<?php 
    include("../include/connection.php");

   session_start();
 
   if(isset($_POST['delete'])){

    $id= $_POST['id'];
    $qu= "DELETE FROM disease WHERE id = $id";
    $res=mysqli_query($con,$qu); 
    
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
                    <a href="add_disease.php"> <button class="btn btn-primary">Add Disease</button>                    
                    </a>

                    <br><br>


                    <?php
                    if(isset($res)){
                        echo '<div class="text-success">Deleted Successfully</div>
        '   ;
                    }
                          
                        $qu= "SELECT * FROM disease ORDER BY id DESC";
                        $res=mysqli_query($con,$qu);

                        $output="";

                        $output .="
                        <table class='table table-sm'>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Control</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>

                        ";

                        if(mysqli_num_rows($res)<1){
                            $output .="
                            <tr>
                                <td colspan='8' class='text-center'>No post done yet</td>
                            </tr>
                            "
                            ;
                        }

                        while($row = mysqli_fetch_array($res)){
                            $id=$row['id'];
                            $output .="
                            <tr>
                                <td>".$row['id']."</td>
                                <td>".$row['title']."</td>
                                <td>".$row['description']."</td>
                                <td>".$row['solve']."</td>
                                <td>".$row['image']."</td>
                                <td>".$row['date']."</td>
                               
                                <td>
                                <div class='col-md-12'>
                                <div class='row'>
                               
                                    <div class='col-md-6'>
                                    <input type='hidden' name='id' value=$id>
                                    <a href='update_disease.php?id=$id'><button name='edit' class='btn btn-success btn-sm ' type='submit'>Edit</button></a> 
                                    </div>
                                    
                                    <form method='post'>
                                    <div class='col-md-6'>
                                    <input type='hidden' name='id' value=$id>
                                    <button name='delete' class='btn btn-danger btn-sm ' type='submit'>Delete</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                                </td>                        
                        
                            ";
                        }

                        $output .="
                        </tr>
                        </table>
                        ";
                        echo $output;
                        ?>

              
            </div>
        </div>
    </div>
    
</body>
</html>



