<?php

include "conn_login.php";

session_start();
/*
if(isset($_SESSION['user'])){
    header("location://localhost/abdo/registration/index.php");
}

*/
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
        margin-top:0px;
    }
    form{
        padding:40px;
        background:#303952;
        box-shadow: 20px 30px 0px #130f40, -20px 30px 0px #130f40;
    }
    #welcome{
        font-size:90px;
        font-weight:900;
        text-align:center;
        color:green;
    }
    #username{
        font-size:200px;
        font-weight:900;
        text-align:center;
        color:purple;
    }
</style>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">welcome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><?php echo $_SESSION['user']?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-danger"  href="logout.php">logout</a>
      </li>
      
    </ul>
    
  </div>
</nav>
    </div>
    <div class="container">
        <div class="row">
            <div class=" col-md-12" id="welcome">
               welcome
            </div>
            <div class=" col-md-12" id="username">
                <?php echo $_SESSION['user']?>
            </div>
        </div>
    </div>
</body>
</html>