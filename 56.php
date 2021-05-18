<?php

$n = 16;
$primeN = array();

for ( $j = 2; $j < $n; $j++ ){

    $sum = 0;
    for ( $i = 2; $i < $j; $i++){
        if ( $j % $i == 0){
            $sum += 1;
        }
    }
    if ( $sum == 0 ){
       array_push($primeN, $j);
    }

}

foreach( $primeN as $value ){
    $sum = 0;
    foreach( $primeN as $value2 ){
        $sum = $value + $value2;
        if ( $sum == $n ){
            echo $n." = ".$value." + ".$value2."<br>";
        }
    }
}

?>