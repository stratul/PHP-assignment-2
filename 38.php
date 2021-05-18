<?php

$n = 1221;

$str = (string) $n;
$revstr = strrev($str);
$reverse = (int) $revstr;

if ( $n == $reverse ){
    echo $n." is a palindrome number";
} else {
    echo $n." is not a palindrome number";
}

?>