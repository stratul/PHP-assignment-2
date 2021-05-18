<?php

$n1 = 15;
$n2 = 20;

echo "The LCM of ".$n1." and ".$n2." is : ";
for( $i = 2; $i <= $n1; $i++ ){
    $n2Mul = $n2 * $i;
    for ( $j = 2; $j <= $n2; $j++ ){
        $n1Mul = $n1 * $j;
        if ($n1Mul == $n2Mul){
            echo $n1Mul;
            break;
        }
    }
    if ($n1Mul == $n2Mul){
        break;
    }
}

?>