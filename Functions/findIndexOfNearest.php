<?php
function findIndexOfNearest(array $inputArray = [null], int $needledNum = null): ?int
{

    if ($inputArray != null) {
        for ($i = 0; $i < count($inputArray); $i++) {
            $tempData[$i] = $inputArray[$i] - $needledNum;
            asort($tempData);
        }
    } else {
        return null;
    }

    return key(($tempData));
}
