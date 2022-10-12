<?php

class appledevices {
    //properties
    public $ram = '1GB';
    public $insh = '4insh';
    public $space = '16GB';
    public $color = 'silver';
    public $ownername;

    //constants
    //const chip = 'A9';
      const ownername = 1;

    //methods
    public function getspecification() {
        //echo 'this iphone ram is: ' . $this->ram.'<br>';
        //echo 'this iphone insh is: ' . $this->insh.'<br>';
        if(strlen($this->ownername) > self::ownername){
            echo 'owner name cant be less than '.self::ownername.' characters long';
        }else{
            echo 'your name has been set';
        }
    }

}

$iphone6plus = new appledevices();
$iphone6plus-> ram = '2GB';
$iphone6plus-> insh = '5 insh';
$iphone6plus-> space = '23 GB';
$iphone6plus-> color = 'red';
$iphone6plus-> ownername = 'ssssss';
$iphone6plus-> getspecification();
echo appledevices::ownername;
//echo $iphone6plus::ownername;

echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';


$iphone7plus = new appledevices();
$iphone7plus-> ram = '2GB';
$iphone7plus-> insh = '5 insh';
$iphone7plus-> space = '23 GB';
$iphone7plus-> color = 'gold';

echo '<pre>';
var_dump($iphone7plus);
echo '</pre>';

$iphone8 = new appledevices();

echo '<pre>';
var_dump($iphone8);
echo '</pre>';
