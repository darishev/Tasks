<?php
    function hexToRgb (int $inputString):array
    {
        $offsetStep=[16,8,0];
        $Keys=[];
        for($i=0,$x=8;$i<3;$i++){
            $step[$i]= (($inputString>>$offsetStep[$i])& 0xFF);
            array_push($Keys,$step[$i]);
        }
        $RGB=[
            'R' => $Keys[0],
            'G' => $Keys[1],
            'B' => $Keys[2]
        ];
            //print_r($RGB);
            return $RGB;
    }

function rgbToHex (string $inputString):array
{

    $Keys=[];
    for($i=0,$x=8;$i<3;$i++){
        $calc = sprintf('%02x', $inputString[$i]);
        $step[$i]= ($calc);
        array_push($Keys,$step[$i]);
    }
    return print((implode($Keys)));
}


//$R= (($inputString>>16)& 0xFF);



hexToRgb(0x432366); // ['r' => 36, 'g' => 171, 'b' => 0]

rgbToHex([36, 171, 0]); // '#24ab00'
