<?php
function createPhoneNumber($numbersArray) {
 
    return sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$numbersArray);
}
?>