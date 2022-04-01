<?php
function swap(array $names, int $index): array
{
    if (isset($names[$index - 1]) and isset($names[$index + 1])) {
        $tempData = $names;
        $names[$index - 1] = $tempData[$index + 1];
        $names[$index + 1] = $tempData[$index - 1];
        return $names;
    } else {
        return $names;
    }
}

