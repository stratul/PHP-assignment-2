<?php

$startingNumber = 1;
$endingNumber = 1000;


echo "Armstrong numbers in given range are: ";

for( $i = $startingNumber; $i <= $endingNumber; $i++ ){
    $str = (string) $i;
    $length = strlen($str);
    $sum = 0;
    $rem = 0;
    for( $j = $i; $j != 0; $j /= 10 ){
        $rem = $j % 10;
        $sum = $sum + pow( $rem, $length );
    }
    if( $sum == $i ){
        echo $sum." ";
    }
}

?>