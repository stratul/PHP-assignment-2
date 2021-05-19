<?php

$n = 56;
$sum = 0;

echo "The positive divisor of ".$n." is: ";

for( $i = 1; $i <= $n/2; $i++ ){
    $posDivisor = $n % $i;
    if( $posDivisor == 0){
        echo $i. " ";
        $sum += $i;
    }
}
echo "<br>The sum of the divisor is : ".$sum;

if( $sum == $n ){
    echo "<br>So, the number is perfect.";
} else {
    echo "<br>So, the number is not perfect.";
}

?>