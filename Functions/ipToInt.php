<?php
function ipToInt( $ip)
{
    $result=[];
    $ipArray = explode('.',$ip);
   //var_dump($ipArray);
    $summArray = [];
 //$resul = (128*256**3)+(32*256**2) + (10*256**1) +(1*256**0);
    $summArray = $ipArray[0]*256**3;
     var_dump($summArray);
    echo (128*256**3);
}
ipToInt('128.32.10.1');
//128.32.10.1
