<?php

$n = 5;
$result = 1;

for( $i = 1; $i <= $n; $i++){
    $result *= $i;
}
echo "The Factorial of ". $n ." is: ". $result;

?>