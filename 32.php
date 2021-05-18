<?php

$n = 12;
$sum = 0;

for ( $i = 2; $i < $n; $i++){
    if ( $n % $i == 0){
        $sum += 1;
    }
}
if ( $sum != 0 ){
    echo $n." is not a prime number";
} else {
    echo $n." is a prime number";
}

?>