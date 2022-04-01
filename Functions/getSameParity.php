<?php
    function getSameParity(array $inputArray=[]):array
    {
        $evenNums = [];
        for($i=0;$i<count($inputArray);$i++){
            if($inputArray[$i]%2!==0){
                array_push($evenNums, $inputArray[$i]);
            }
        }
        return $evenNums;

    }
