<?php

$n = 5;
$result = 0;

for( $i = 1; $i <= $n; $i++ ){
    $result += 1/$i;
}
echo "Sum of Series upto ". $n ." terms : ". $result;

?>