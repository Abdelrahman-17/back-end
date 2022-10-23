<?php


require "conn_login.php";





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
    body{
        background:url("images/back.jpg");
        background-size:cover;
        color:snow;
    }
    .container{
        margin-top:120px;
    }
    form{
        padding:40px;
        background:#303952;
        box-shadow: 20px 30px 0px #130f40, -20px 30px 0px #130f40;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4">
               <form action=" <?php echo $_SERVER['PHP_SELF']?>" method= "POST">
                <h1 class="text-center">login</h1>
                   <div class="form-group">
                      <label for="">email</label>
                      <input type="email" name="email" placeholder="email" class="form-control">
                   </div>    
                   <div class="form-group">
                      <label for="">password</label>
                      <input type="password" name="password" placeholder="password" class="form-control">
                   </div>  
                   <div class="form-group my-2">
                      <input type="submit" name="submit" class="form-control btn btn-success" value="login">
                   </div>    
                   <div class="form-group my-2">
                     not have any account? <span><a href="register.php">register</a></span>
                   </div>       
                 </form>
            </div>
        </div>
    </div>
</body>
</html>