<?php 

function format_money(float $amount): string {
    $decAmount = number_format($amount, 2);
  
    $decAmount = str_replace(',', '', $decAmount);
    $decAmount = "$" . $decAmount;
    
    return $decAmount;
}
?>