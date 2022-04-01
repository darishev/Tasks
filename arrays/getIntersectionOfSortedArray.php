<?php
function getIntersectionOfSortedArray(array $firstArray, array $secondArray): array
{
    $lengthFirstArray = count($firstArray);
    $lengthSecondArray = count($secondArray);
    $temp = [];
    
    for ($i = 0; $i < $lengthFirstArray; $i++) {
        for ($f = 0; $f < $lengthSecondArray; $f++) {
            if ($firstArray[$i] === $secondArray[$f]) {
                array_push($temp, $firstArray[$i]);
            }
        }
    }
    
    return $temp;
}
