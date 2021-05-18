<?php

$startingNumber = 1;
$endingNumber = 50;


echo "The Perfect numbers within the given range : ";

for( $i = $startingNumber; $i <= $endingNumber; $i++ ){
    $sum = 0;
    for( $j = 1; $j <= $i/2; $j++ ){
        $posDivisor = $i % $j;
        if( $posDivisor == 0){
            $sum += $j;
        }
    }
    if( $sum == $i ){
        echo $sum." ";
    }
}

?>