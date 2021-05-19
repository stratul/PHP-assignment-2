<?php

$n = 1634;
$str = (string) $n;
$length = strlen($str);
$sum = 0;
$rem = 0;


for( $i = $n; $i != 0; $i /= 10 ){
    $rem = $i % 10;
    $sum = $sum + pow( $rem, $length );
}
if( $sum == $n ){
    echo $n." is an Armstrong number.";
} else {
    echo $n." is not an Armstrong number.";
}

?>