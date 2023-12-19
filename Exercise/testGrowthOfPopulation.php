<?php

function nbYear($p0, $percent, $aug, $p) {
  $years = 0;

  while ($p0 < $p) {
      $p0 = (int)($p0 * (1 + $percent / 100) + $aug);
      $years++;
  }

  return $years;
}

echo nbYear(1500, 5, 100, 5000); 
//function nbYear($p0, $percent, $aug, $p) {
 // return $p0 >= $p ? 0 : 1 + nbYear((int)$p0 * (1+$percent/100) + $aug, $percent, $aug, $p);   
//}
?>