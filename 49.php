<?php

$startingNumber = 1;
$totalNumber = 10;
$diff = 4;
$num = $startingNumber;
$sum = $startingNumber;

echo "The Sum of the A.P. series are : ".$startingNumber;

for ( $i = 1; $i < $totalNumber; $i++ ){
    $num += $diff;
    echo " + ".$num;
    $sum += $num;
}
echo " = ".$sum;

?>