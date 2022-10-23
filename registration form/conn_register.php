<?php

if (isset($_POST['save'])){
    $conn=mysqli_connect("localhost","root","","register");

    $user=$_POST['user'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $sql="SELECT * FROM students WHERE email='{$email}'";
    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)>0){
        echo "<div class='alert alert-danger'>email already exists</div>";

    }else{
        if($password===$password){
            $pass=md5($password);// عشان ميظهرش رقم عادي
            $sql="INSERT INTO students(username,email,password)
            VALUES('{$user}','{$email}','{$pass}')";
            if(mysqli_query($conn,$sql)){
                echo "<div class='alert alert-danger'>hello $user you have register successfully</div>";
            }else{
                echo "errors";
            }
        }else{
            echo "<div class='alert alert-danger'>password are not matching</div>";
        }
    }
}