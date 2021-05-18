<?php

$n = 12345;

$str = (string) $n;
$revstr = strrev($str);
$reverse = (int) $revstr;

echo "The number in reverse order is : ".$reverse;

?>