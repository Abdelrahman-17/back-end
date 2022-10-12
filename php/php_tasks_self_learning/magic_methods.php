<?php

class iphone{
    public $name;
    public $ram;
/*
    public function sayhello($n){
        $this->$name=$n;
        echo "Hello, ".$n;
    }
*/
    public function __construct($n){
        $this->$name=$n;
        echo "Hello, ".$n;
    }
   
}
/*
class sony extends iphone{

}
$iphone = new sony();
*/

$iphone = new iphone("abdelrahman");
//$iphone->sayhello("abdo");
echo '<pre>';
print_r($iphone);
echo '</pre>';
