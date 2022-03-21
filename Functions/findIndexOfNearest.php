<?php
    function findIndexOfNearest(array $inputArray=[null], int $needledNum = null):int
    {
        $goodResults = [];
    if ($inputArray!=null){
        for($i=0;$i<count($inputArray);$i++){
            $tempData = $inputArray[$i]-$needledNum;
            array_push($goodResults,$tempData);
            sort($goodResults);
        }
    } else{
        return print(null);
    }
        return print($goodResults[0]);
    }

findIndexOfNearest([15, 10, 3, 4], 0); // 2
findIndexOfNearest([], 2); // null
