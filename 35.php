<?php

$n = 10;
$sum1 = 0;
$sum2 = 1;
$sum3 = 0;

echo "Here is the Fibonacci series upto ".$n." terms : ".$sum1." ".$sum2." ";

for ( $i = 0; $i < $n-2; $i++ ){
    $sum3 = $sum1 + $sum2;
    echo $sum3." ";
    $sum1 = $sum2;
    $sum2 = $sum3;
}

?>