<?php
function digital_root($number): int
{
    $digits = str_split((string)$number);
  
    $sum = array_sum($digits);
  
    if ($sum >= 10) {
        return digital_root($sum);
    }
    
    return $sum;
}
?>