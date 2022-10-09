<?php
session_start();

echo 'hello '.$_SESSION['name'].' how are you?';

include 'counter.php';