<?php

function people_with_age_drink(int $old): string {
        if($old < 14){
          return 'drink toddy';
        } elseif( $old < 18){
          return "drink coke";
        } elseif($old < 21){
          return  "drink beer";
        } elseif($old >= 21){
          return "drink whisky";
        }
        
        $old = 15;
        
}
?>