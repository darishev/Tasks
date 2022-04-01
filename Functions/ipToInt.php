<?php
function ipToInt(string $ip): int
{
    $result = [];
    $ipArray = explode('.', $ip);
    for ($i = 0, $n = 4; $i < count($ipArray); $i++) {
        --$n;
        $tempResult = ($ipArray[$i] * 256 ** $n);
        array_push($result, $tempResult);
    }

    return array_sum($result);
}
