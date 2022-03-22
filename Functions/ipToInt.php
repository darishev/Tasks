<?php
    function ipToInt(string $ip):int
    {
        $result=[];
        $ipArray = explode('.',$ip);
        for ($i=0,$n=4;$i<count($ipArray);$i++){
            --$n;
            $tempResult = ($ipArray[$i]*256**$n);
            array_push($result,$tempResult);
        }
            //$r = 128*256**3)+(32*256**2) + (10*256**1) +(1*256**0);
        return print_r(array_sum($result));
    }

    ipToInt('128.32.10.1');


    function intToIp(string $ip):string
    {
        $tempData = $ip;
        $newArray=[];

        for($i=0;$i<=3;$i++){
            $newArray[$i] = $tempData & 0xff;
            $tempData = $tempData >>8;
        }
        krsort($newArray);
        $result =  implode('.',$newArray);

        return print $result;
    }

    intToIp(2149583361); // '128.32.10.1'
