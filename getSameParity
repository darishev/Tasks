<?php
    function getSameParity(array $inputArray=[])
    {
        $evenNums = [];
        for($i=0;$i<count($inputArray);$i++){
            if($inputArray[$i]%2!==0){
                array_push($evenNums, $inputArray[$i]);
            }
        }
        return print_r($evenNums);

    }

getSameParity([]); // []
getSameParity([-1, 0, 1, -3, 10, -2]); // [-1, 1, -3]
