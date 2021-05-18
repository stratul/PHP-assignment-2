<?php

$n = 5;
$sum = 0;

echo "The square natural upto ".$n." terms are : ";
for( $i = 1; $i <= $n; $i++ ){
    $sum = $sum + pow( $i, 2);
    $sqr = pow( $i, 2);
    echo $sqr. " ";
}
echo "<br>The Sum of Square Natural Number upto ".$n." terms = ".$sum;

?>