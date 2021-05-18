
<?php

$startingNumber = 1;
$endingNumber = 200;

echo "The Strong numbers between ".$startingNumber." and ".$endingNumber." are : ";

for ( $k = $startingNumber; $k <= $endingNumber; $k++ ){

    $str = (string) $k;
    $length = strlen($str);
    $sum = 0;

    for ( $i = 0; $i < $length; $i++ ){
        $mul = 1;
        for ( $j = 1; $j <= $str[$i]; $j++ ){
            $mul *= $j;
        }
        $sum += $mul;
    }
    if ( $sum == $k ){
        echo $k." ";
    }

}

?>