<?php
function hexToRgb(string $inputString): array
{
    $hexedInput = hexdec($inputString);
    $offsetStep = [16, 8, 0];
    $Keys = [];
    for ($i = 0; $i < 3; $i++) {
        $step[$i] = (($hexedInput >> $offsetStep[$i]) & 0xFF);
        array_push($Keys, $step[$i]);

    }

    $RGB = [
        'R' => $Keys[0],
        'G' => $Keys[1],
        'B' => $Keys[2]
    ];
    return $RGB;
}

