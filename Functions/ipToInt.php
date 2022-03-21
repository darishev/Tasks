<?php

function ipToInt(string $ip):string
{
    $ipIn = explode('.',$ip);
    $calcResults = [];
    for ($i=0;$i<count($ipIn);$i++){
        $result = $ipIn[$i] * 16777216 + 32 * 65536 + 10 * 256 + 1 ;
        array_push($calcResults,$result );
    }
    $stringResult = implode('.', $calcResults);
    return print ($stringResult);
}

function intToIps(string $ips):string
{
    $ipIn = explode('.',$ips);
    $ip = [];
    $calcResults = [];

    for ($i=0;$i<count($ipIn);$i++){
        $x = $ipIn[$i];
        for($n=0;$n<3;$n++){
            $ip[$i] = $x & 0xff;
            $x = $x >>8;
            array_push($calcResults,$x);
        }

    }
    var_dump($calcResults);

    return print ($calcResults);
}


//ipToInt('128.0.0.1');
intToIps('2149583361.2099713.2099713.18876929');



/*    $a = 124;
$x = 2082474497;
    $result = $a * 16777216 + 32 * 65536 + 10 * 256 + 1 ;



$ip = [];
for($i=0;$i<=3;$i++){
 $ip[$i] = $x & 0xff;
 $x = $x >>8;
}

  var_dump($ip);
    var_dump($result);
var_dump($x);*/