<?php 
    include("../include/connection.php");

   session_start();
 
   if(isset($_POST['delete'])){

    $id= $_POST['id'];
    $qu= "DELETE FROM message WHERE id = $id";
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
    <title>Message Dashboard</title>

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
                    <h4 class="my-2">Message</h4>
                    </a>

                    <br><br>

                    <?php
                    if(isset($res)){
                        echo '<div class="text-success">Deleted Successfully</div>
        '   ;
                    }
                          
                        $qu= "SELECT * FROM message";
                        $res=mysqli_query($con,$qu);

                        $output="";

                        $output .="
                        <table class='table table-sm'>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>

                        ";

                        if(mysqli_num_rows($res)<1){
                            $output .="
                            <tr>
                                <td colspan='8' class='text-center'>No message done yet</td>
                            </tr>
                            "
                            ;
                        }

                        while($row = mysqli_fetch_array($res)){
                            $id=$row['id'];
                            $output .="
                            <tr>
                                <td>".$row['id']."</td>
                                <td>".$row['name']."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['mobile']."</td>
                                <td>".$row['message']."</td>
                                <td>".$row['date']."</td>
                               
                                <td>
                                <div class='col-md-12'>
                                <div class='row'>
                               
                                   
                                    
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



