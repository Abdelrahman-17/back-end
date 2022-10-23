<?php

$conn=mysqli_connect("localhost","root","","register");

session_start();
session_unset();
session_destroy();

header("location://localhost/abdo/registration/index.php");

?>