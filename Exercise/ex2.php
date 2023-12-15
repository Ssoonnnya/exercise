<?php

namespace exercise\Exercise\ex2;

class leapYear{

    function isLeapYear(int $year): bool {
        if ($year % 4 == 0 && $year % 100 != 0){
                return true;
    
        } elseif ($year % 400 == 0){
                return true;
        };
                  return false;
    
    }

}

?>