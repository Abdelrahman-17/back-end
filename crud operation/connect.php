<?php

$con=new mysqli('localhost','root','','test');

if(!$con){
    die("connection failed: ".mysqli_error($con));
    
}else{
   // echo "connection successful";
}   
