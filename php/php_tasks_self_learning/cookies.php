<?php
//setcookie(name,value,expire date,path,domain,secure,httponly)
setcookie("zero" ,"test",time()+3600,"/");

if (count($_COOKIE)>0){
    echo "good the cookies enable";
}else{
    echo "sorry the coo;ies are not enable";
}


/*
setcookie("school" ,"channel",time()+86400,"/","school.elzero.info",true,true);
