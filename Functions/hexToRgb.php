<?php
function hexToRgb(int $inputString): array
{
    $offsetStep = [16, 8, 0];
    $Keys = [];
    for ($i = 0, $x = 8; $i < 3; $i++) {
        $step[$i] = (($inputString >> $offsetStep[$i]) & 0xFF);
        array_push($Keys, $step[$i]);
    }
    $RGB = [
        'R' => $Keys[0],
        'G' => $Keys[1],
        'B' => $Keys[2]
    ];
    return $RGB;
}



//hexToRgb(0x432366); // ['r' => 36, 'g' => 171, 'b' => 0]
//rgbToHex([36, 171, 0]); // '#24ab00'
