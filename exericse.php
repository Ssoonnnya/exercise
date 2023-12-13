<?php

function remainder($a, $b) {
        if ($b == 0) {
               return null;
           }
       
           $larger = max($a, $b);
           $smaller = min($a, $b);
       
           return $larger % $smaller;
       }
       
       $num1 = 198;
       $num2 = 5;

?>