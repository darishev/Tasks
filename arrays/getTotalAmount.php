<?php

function getTotalAmount(array $moneyCount, string $val): int
{
    $sum = 0;
    foreach ($moneyCount as $key => $value) {
        if ($val === substr($moneyCount[$key], 0, 3)) {
            $sum = $sum + substr($value, 4);
        }
    }
    return $sum;
}
