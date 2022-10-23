<?php


if(isset($_POST['submit'])){
    $conn=mysqli_connect("localhost","root","","register");
    $email=$_POST['email'];
    $password=$_POST['password'];
    $incpass=md5($password);
 
    $sql="SELECT * FROM students WHERE email='{$email}'";
    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        $pass=$row['password'];
        if($pass===$incpass){
            session_start();
            $_SESSION['user']=$row['username'];
            header("location://localhost/abdo/registration/home.php");

        }else{
            echo "<div class='alert alert-danger'>invalid password</div>";
        }
    }else{
        echo "<div class='alert alert-danger'>invalid email</div>";
    }


} 