<?php

abstract class makedevice{

    public $ram;
    public function sayhello(){
        echo "sy hello";

    }
}

class appledevices extends makedevice{



}
$iphone6plus = new appledevices();
$iphone6plus->sayhello();

echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';

