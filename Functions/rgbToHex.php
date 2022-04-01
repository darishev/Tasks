<?php
function rgbToHex(string $inputString): array
{

    $Keys = [];
    for ($i = 0, $x = 8; $i < 3; $i++) {
        $calc = sprintf('%02x', $inputString[$i]);
        $step[$i] = ($calc);
        array_push($Keys, $step[$i]);
    }
    return ((implode($Keys)));
}
