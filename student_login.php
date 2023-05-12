

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
</head>
<body></body>
<?php 
        include('include/header.php')
    ?>
    
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 ">
                    <form action="" method="post" class="py-2" style="margin-top: 100px;">
                        <div class="">
                        <h2 class="text-success">Login As Student</h2>

                          
                        </div>
                        <div class="form-group">
                            <label for="uname">Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <input type="submit" name="login" class="btn btn-success">
                        <div class="mt-2">Dont have an account? <a href="create_student.php" class="text-primary mt-2">Create Account</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
</body>
</html>
