<?php


class iphone{
    
    public $name;
    public $ram;
    
    public function __call($method,$params){

        echo 'the '.$method.' not found or not accessible';
    }
   
}

$iphone = new iphone();
$iphone->sayhello();
echo '<pre>';
print_r($iphone);
echo '</pre>';
