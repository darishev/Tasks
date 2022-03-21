<?php
function sumIntervals(array $range=[])
{

    for($i =0,$k=0; $i<count($range);$i++){
        $rangeA = $range[$i][0];
        $rangeB =  $range[$i][1];


        }
}

}


sumIntervals([
    [1, 2],
    [11, 12]
]); // 2

sumIntervals([
    [2, 7],
    [6, 6]
]); // 5

sumIntervals([
    [1, 9],
    [7, 12],
    [3, 4]
]); // 11

sumIntervals([
    [1, 5],
    [-10, 19],
    [1, 7],
    [16, 100],
    [5, 11]
]); // 110