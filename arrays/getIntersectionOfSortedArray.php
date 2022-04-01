<?php
function getIntersectionOfSortedArray(array $firstArray, array $secondArray): array
{

    $lenghtFirstArray = count($firstArray);
    $lenghtSecondArray = count($secondArray);

    for ($i = 0; $i < $lenghtFirstArray; $i++) {
        for ($f = 0; $f < $lenghtSecondArray; $f++) {
            if ($firstArray[$i] === $secondArray[$f]) {
                return $firstArray[$i];
            }
        }
    }
    return $firstArray;
}
