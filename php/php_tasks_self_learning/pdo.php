<?php

$dsn = 'mysql:host=localhost;dbname=test';//data source name
$user = 'root';
$pass = '';

try{

    $pdo = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo'you are connect';
}
catch (PDOException $e){
    echo 'failed'.$e->getMessage();
}


