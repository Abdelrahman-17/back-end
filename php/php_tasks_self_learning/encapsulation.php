<?php

class appledevices {
    //properties
    public $ram = '1GB';
    public $insh = '4insh';
    public $space = '16GB';
    public $color = 'silver';
    private $lock;

    //methods ملهاش قيم افتراضيه عشان كده لو صفت بارامتر لازم اضيفه في وقت الطباعه برضو
    public function changespace($r,$i,$s,$c){
        $this->ram = $r;
        $this->insh = $i;
        $this->space = $s;
        $this->color = $c;

    }
    public  function changelock($lo){
        $this->lock = sha1($lo);
    }


}

$iphone6plus = new appledevices();
$iphone6plus->changespace("4 GB","6 insh","65 GB","silver");
//$iphone6plus-> ram = '2GB';
//$iphone6plus-> insh = '5 insh';
//$iphone6plus-> space = '23 GB';
//$iphone6plus-> color = 'red';

//echo $iphone6plus->color;
$iphone6plus->changelock("abdelrahman");

//$iphone6plus->lock = 'abdelrahman';
//echo $iphone6plus->lock;

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
