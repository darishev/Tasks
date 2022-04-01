<?php
function swap(array $names, int $index): array
{
    $indexPos = $index + 1;
    $indexNeg = $index - 1;

    if (isset($names[$indexNeg]) and isset($names[$indexPos])) {
        $tempData = $names;
        $names[$indexNeg] = $tempData[$indexPos];
        $names[$indexPos] = $tempData[$indexNeg];
        return $names;
    } else {
        return $names;
    }
}
