<?php

$startingNumber = 3;
$totalNumber = 5;
$diff = 2;
$num = $startingNumber;
$sum = $startingNumber;

echo "The numbers for the G.P. series: ".$startingNumber;

for ( $i = 1; $i < $totalNumber; $i++ ){
    $num *= $diff;
    echo " ".$num;
    $sum += $num;
}
echo "<br>The Sum of the G.P. series : ".$sum;

?>