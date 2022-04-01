<?php
function bubbleSort(array $arraySort): array
{

    $size = count($arraySort) - 1;
    for ($i = 0; $i < $size; $i++) {
        for ($s = 0; $s < $size - $i; $s++) {
            $a = $s + 1;
            if ($arraySort[$a] < $arraySort[$s]) {
                $buffer = $arraySort[$a];
                $arraySort[$a] = $arraySort[$s];
                $arraySort[$s] = $buffer;

            }
        }
    }
    return $arraySort;
}
