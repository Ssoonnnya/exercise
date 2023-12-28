<?php

function square_digits($num): int {
    $split_num = str_split($num);
    $result = '';
    foreach($split_num as $splits){
      $result .= pow((int)$splits,2);
    }
    return (int)$result;
}

?>