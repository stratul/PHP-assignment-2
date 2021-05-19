<?php

$startingNumber = 100;
$endingNumber = 200;
$n = 9;
$sum = 0;

echo "Numbers between ".$startingNumber." and ".$endingNumber.", divisible by ".$n." is: ";

for ( $i = $startingNumber; $i <= $endingNumber; $i++ ){
    if ( $i % $n == 0){
        echo $i." ";
        $sum += $i;
    }
}
echo "<br>The sum: ".$sum;

?>