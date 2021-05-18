<?php

$n = 4;
$k=1;
$space = $n-1;

for ($i=0; $i<$n; $i++){
    
    for ($l=0; $l<$space; $l++){
        echo "&nbsp";
    }
    $space--;

    for ($j=0; $j<=$i; $j++){
        echo $k." ";
        $k++;
    }
    echo "<br>";

}

?>