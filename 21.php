<?php

$n = 5;
$sum = 9;
$result = 9;
echo "The sum of the saries ".$result." ";

for( $i=1; $i<=$n-1; $i++ ){
    $result = $result * 10 + 9;
    $sum += $result;
    echo " + ".$result;
}
echo " is: ".$sum;
?>