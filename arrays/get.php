<?php
function get(array $cities, int $index, $default = null): string
{
    if ($index < count($cities)) {
        return $cities[$index];
    } else {
        $cities[$index] = $default;
        return $cities[$index];
    }
}
