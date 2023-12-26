<?php
function balance(string $l, string $r): string {
    $lWeight = 2 * substr_count($l, '!') + 3 * substr_count($l, '?');
    $rWeight = 2 * substr_count($r, '!') + 3 * substr_count($r, '?');

    if ($lWeight > $rWeight) {
        return "Left";
    } elseif ($lWeight < $rWeight) {
        return "Right";
    } else {
        return "Balance";
    }
}
?>