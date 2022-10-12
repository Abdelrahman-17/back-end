<?php

class appledevices {
    //properties
    public $ram = '1GB';
    public $insh = '4insh';
    public $space = '16GB';
    public $color = 'silver';
    public $screen = "lsd";
    public $name;

    //methods ملهاش قيم افتراضيه عشان كده لو صفت بارامتر لازم اضيفه في وقت الطباعه برضو
    public function changespace($r,$i,$s,$c){
        $this->ram = $r;
        $this->insh = $i;
        $this->space = $s;
        $this->color = $c;

    }
    /*
    final public function sayhello($n){
        $this->$name = $n;
        echo "welcome  ".$n;
    */
    public function sayhello($n){
        $this->$name = $n;
        echo "welcome to ".$n;

    }

}

class sony extends appledevices{
    //properties

    public $camera = "25 MG";
/*
    public function sayhello($n){
        $this->$name = $n;
        //echo "welcome to ".$n.' this phone has concatinte rm';
        echo "welcome  ".$n;
    }
*/

}

$iphone6plus = new appledevices();
$iphone6plus->changespace("4 GB","6 insh","65 GB","silver");
$iphone6plus->sayhello("iphone");
$iphone6plus->price = "400$";

echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';

$sony = new sony();
$sony->sayhello("sony");
echo '<pre>';
print_r($sony);
echo '</pre>';
