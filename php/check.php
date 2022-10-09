<?php 

   session_start();


   $admins = array("osama","abdo","sayed","ahmed","mhmd");

   if($_SERVER['REQUEST_METHOD'] == 'POST'){

     $user =  $_POST['username'];

     if(in_array($user,$admins)){

        $_SESSION['user'] = $user;


     }

     echo $_SESSION['user'];

     echo '<pre>';
         print_r($_SESSION);
     echo '</pre>';

   }else{

    echo 'error: you can\' browser this page directly';
   }