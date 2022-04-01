<?php
function findIndexOfNearest(array $inputArray = [null], int $needledNum = null)
{
    $goodResults = [];
    if ($inputArray != null) {
        for ($i = 0; $i < count($inputArray); $i++) {
            $tempData = $inputArray[$i] - $needledNum;
            array_push($goodResults, $tempData);
            asort($goodResults);
        }
    } else {
        return null;
    }

    return key(($goodResults));
}
