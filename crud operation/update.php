<?php

include "connect.php";
$id=$_GET['updateid'];

$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="update `crud` set id=$id, name='$name',email='$email',
  mobile='$mobile',password-'$password' where id=$id";

  $result=mysqli_query($con,$sql);

  if($result){
    echo "Data updated successfully";
    
    //header('location:display.php');

  }else{
    die("Error: " . mysqli_error($con));  
  }

}






?>

<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>crud operation!</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="POST" >
  <div class="form-group">
    <label >name</label>
    <input type="text" class="form-control" 
    placeholder="enter your name" 
    name="name" autocomplete="off">
    </div>
    <div class="form-group">
    <label >email</label>
    <input type="email" class="form-control" 
    placeholder="enter your email"
     name="email" autocomplete="off">
    </div>
    <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control" 
    placeholder="enter your mobile"
     name="mobile" autocomplete="off">
    </div>
    <div class="form-group">
    <label >password</label>
    <input type="password" class="form-control" 
    placeholder="enter your password"
     name="password" autocomplete="off">
    </div>
  
  <button type="submit" class="btn btn-primary"
   name="submit">update</button>
</form>

    </div>

    
  </body>
</html>
