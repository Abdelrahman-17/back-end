<?php

/*
filter
$string= $_POST['test'];

echo filter_var($string,FILTER_SANITIZE_STRING);

*/

/*
filter_var

$input = $_POST['fest'];

if (filter_var($input , FILTER_VALIDATE_INT) !== FALSE){
    echo 'good the ' . $input. ' you entered is int';
}else{
    echo'sorry the ' .$input. ' you entered is not integer';
}
*/

//filter adn=vance

$input = $_POST['dest'];

$opt = array(
     'options' => array(/*
        'min_range' => 1,
        'max_range' => 999
        */
     ),
     'flags' => FILTER_FLAG_IPV4
      
);

if (filter_var($input,FILTER_VALIDATE_IP,$opt) !== FALSE){
    echo 'good the ' . $input. ' you entered is int';
}else{
    echo'sorry the ' .$input. ' you entered is not integer';
}