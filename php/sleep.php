<?php
/*
$name = 'abdo';

echo $name.'<br>';

usleep(500000);

echo "sorry forget to say hi";
*/

 function checkFile(){
   
    if (file_exists('osman.txt')){
        echo "good file is found";
    }else{

        sleep(2);
        /*
        time_sleep_until(time()+5);
        */ 
        checkFile();
    }


 }

 echo checkFile();