<?php

function descendingOrder(int $n): int {

$digits = str_split($n);

rsort($digits);

$result = (int)implode('', $digits);

return $result;
}

?>