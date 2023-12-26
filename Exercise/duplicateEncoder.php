<?php
function duplicate_encode($word){
    $word = strtolower($word);
   $result = '';

   for ($i = 0; $i < strlen($word); $i++) {
       $char = $word[$i];
       $count = substr_count($word, $char);

       $result .= ($count == 1) ? '(' : ')';
   }

   return $result;
}

?>