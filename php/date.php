<?php

//echo time('Y-m-d') .'<br>';

echo date_default_timezone_set('Africa/Egypt') ;
echo date('Y-m-d') .'<br>';

$nextweek = time() + (30*24*60*60);

echo date('Y-m-d h:i:s', $nextweek).'<br>';

echo 'this year is' . date('Y').'<br>';
echo 'this year is' . date('d').'<br>';
echo  date('1').'<br>';

/*
$aftertwodays = time()+(1*24*60*60);
echo date('js', $aftertwodays).'<br>';
*/
/*
echo date('1 JS \of F Y').'<br>';

$time = strtotime('now',time()-3600);
echo $time . '<br>';
echo date('Y-m-d h:i:s',$time ).'<br>';
*/

//$time = strtotime('+1 day');
$time = strtotime('next monday');

echo date('Y-m-d h:i:s',$time ).'<br>';