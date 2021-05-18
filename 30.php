<?php

$startingNumber = 1;
$endingNumber = 2000;


echo "Armstrong numbers in given range are: ";

for( $i = $startingNumber; $i <= $endingNumber; $i++ ){
    $sum = 0;
    $rem = 0;
    for( $j = $i; $j != 0; $j /= 10 ){
        $rem = $j % 10;
        $sum = $sum + pow( $rem, 3 );
    }
    if( $sum == $i ){
        echo $sum." ";
    }
}

?>