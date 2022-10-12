<?php

trait fingerprint{
  
    public function fingerfeature(){
        echo "this is finger print feature";
    }

}

trait threeddimensiontouch{

    public function threed(){
        echo "this is 3d touch feature ";
    }
}

trait facedetect{

    public function facefeature(){
        echo "this is face detect feature ";
    }
}




class iphone{
    use fingerprint;
    use threeddimensiontouch;
    use facedetect;
}   

class sony{

    
}

class nokia{


}

$iphone = new $iphone();
$iphone->fingerfeature();
$iphone->threed();
echo '<pre>';
print_r($iphone);
echo '<pre>';

$sony = new $sony();
echo '<pre>';
print_r($sony);
echo '<pre>';

$nokia = new $nokia();
echo '<pre>';
print_r($nokia);
echo '<pre>';