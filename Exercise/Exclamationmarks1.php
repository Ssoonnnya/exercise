<?php
function remove(string $s): string {

  if (substr($s, -1) === '!') {

    $s = substr($s, 0, -1);
  }
    return $s;
}

?>