<?php
function count_smileys($arr): int {
   $count = 0;

    foreach ($arr as $face) {
        if (preg_match('/^[:;][-~]?[)D]$/', $face)) {
            $count++;
        }
    }
    return $count;
}
?>