<?php


interface mobille{

    public function preshome();

    }  





class iphone implements mobille{
    public $name;

    public function preshome(){
        echo 'you eill see open application folder';

    }

}

class sony implements mobille{
    public $name;

    public function preshome(){
        echo 'you eill close open application folder';

    }
}

$iphone = new iphone();
$iphone->preshome();

echo '<pre>';
print_r($iphone);
echo '</pre>';

$sony = new sony();
$sony->preshome();

echo '<pre>';
print_r($sony);
echo '</pre>';

