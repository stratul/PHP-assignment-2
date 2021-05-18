<?php

$n = 1634;
$sum = 0;
$rem = 0;


for( $i = $n; $i != 0; $i /= 10 ){
    $rem = $i % 10;
    $sum = $sum + pow( $rem, 3 );
}
if( $sum == $n ){
    echo $n." is an Armstrong number.";
} else {
    echo $n." is not an Armstrong number.";
}

?>