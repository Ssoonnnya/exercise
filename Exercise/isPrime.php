<?php
function is_prime(int $n): bool {
    if ($n <= 1) {
          return false;
      }
    for ($i = 2; $i * $i <= abs($n); $i++) {
        if ($n % $i == 0) {
            return false;
          }
      }
  
      return true;
  }
?>