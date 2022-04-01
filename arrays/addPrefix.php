<?php

function addPrefix($names, $prefix = null): array
{

    if (isset($names) and $prefix) {
        for ($i = 0; $i < count($names); $i++) {
            $newNames[$i] = "{$prefix} {$names[$i]}";

        }
    }
    return $newNames;
}
