<?php

require 'apple.php';

$phone = new apple\hardware\phones\createphones();
$phone->sayhello();
print_r($phone);


$tablet = new apple\hardware\tablet\createtablet();
$phone->sayhello();
print_r($tablet);


