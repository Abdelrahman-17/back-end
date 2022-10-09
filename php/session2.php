<?php
session_start();

$_SESSION['name']='osos';

include 'counter.php';

echo '<a href="about.php">about</a>';