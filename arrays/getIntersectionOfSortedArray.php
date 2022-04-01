<?php
function getIntersectionOfSortedArray(array $firstArray, array $secondArray): array
{

    $lengthFirstArray = count($firstArray);
    $lengthSecondArray = count($secondArray);

    for ($i = 0; $i < $lengthFirstArray; $i++) {
        for ($f = 0; $f < $lengthSecondArray; $f++) {
            if ($firstArray[$i] === $secondArray[$f]) {
                return $firstArray[$i];
            }
        }
    }
    return $firstArray;
}
