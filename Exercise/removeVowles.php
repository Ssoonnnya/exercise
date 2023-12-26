<?php
function disemvowel($string) {
  
    return  str_replace(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], '', $string);
}
?>