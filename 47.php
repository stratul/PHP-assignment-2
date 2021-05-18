<?php

$n = 15;
$str = (string) $n;
$length = strlen($str);
$sum = 0;

for ( $i = 0; $i < $length; $i++ ){
    $mul = 1;
    for ( $j = 1; $j <= $str[$i]; $j++ ){
        $mul *= $j;
    }
    $sum += $mul;
}
if ( $sum == $n ){
    echo $n." is a strong number";
} else {
    echo $n." is not a strong number";
}

?>