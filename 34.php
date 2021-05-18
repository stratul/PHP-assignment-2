<?php

$startingNumber = 1;
$endingNumber = 50;

echo "The prime number between ".$startingNumber." and ".$endingNumber." are : ";
for ( $j = 2; $j <= $endingNumber; $j++ ){

    $sum = 0;
    for ( $i = 2; $i < $j; $i++){
        if ( $j % $i == 0){
            $sum += 1;
        }
    }
    if ( $sum == 0 ){
        echo $j." ";
    } 

}

?>