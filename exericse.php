<?php

function smallEnough($a, $limit)
{
    foreach ($a as $array) {
        if ($array > $limit) {
            return false;
        }
    }
    return true; 
}

$arr =[195, 123,201];
$lim = 250;
?>