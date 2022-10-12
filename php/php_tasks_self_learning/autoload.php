<?php

require 'classes/testing2.auto2.php';
require 'classes/testing3.auto3.php';

spl_autoload_register(function($class){

   require 'classes/'.$class.'.auto2.php';

});
$var = new testing2();

print_r($var);