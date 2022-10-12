<?php




class iphone{
    
    public $name;
    public $ram;
    
    public function  __get($prop){
        
        echo 'the '.$prop.' not found or not accessible';
    }

     
    
   
}

$iphone = new iphone();
 $iphone->name = "abdo";

echo '<pre>';
print_r($iphone);
echo '</pre>';
