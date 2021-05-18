<?php

$n = 5;
$sum = 1;
$result = 1;
echo "The sum of the saries ".$result." ";

for( $i=1; $i<=$n-1; $i++ ){
    $result = $result * 10 + 1;
    $sum += $result;
    echo "+ ".$result." ";
}
echo " is: ".$sum;
?>