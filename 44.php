<?php

$n1 = 15;
$n2 = 20;

$n1Arr = array();
$n2Arr = array();
$matchingArr = array();


for ( $i = 2; $i < $n1; $i++ ){
    if ( $n1 % $i == 0){
        array_push($n1Arr,$i);
    }
}

for ( $i = 2; $i < $n2; $i++ ){
    if ( $n2 % $i == 0){
        array_push($n2Arr,$i);
    }
}

foreach( $n1Arr as $value ){
    foreach( $n2Arr as $value2){
        if ($value == $value2){
            array_push($matchingArr,$value);
        }
    }
}
$hcf = end($matchingArr);

$n1Mul = $n1 * ( $n2 / $hcf);
$n2Mul = $n2 * ( $n1 / $hcf);

echo "The LCM of ".$n1." and ".$n2." is : ".$n1Mul;

?>