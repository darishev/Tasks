<?php
    function findIndexOfNearest(array $inputArray=[null], int $needledNum = null):int
    {
        $goodResults = [];
    if ($inputArray!=null){
        for($i=0;$i<count($inputArray);$i++){
            $tempData = $inputArray[$i]-$needledNum;
            array_push($goodResults,$tempData);
            asort($goodResults);

        }
    } else{
        return print(null);
    }

        return print key(($goodResults));
    }

findIndexOfNearest([1, 10, 0, 4], 0); // 2
findIndexOfNearest([], 2); // null
