<?php

$n = 4;
$space = $n-1;

for ($i=1; $i<=$n; $i++){
    
    for ($l=0; $l<$space; $l++){
        echo "&nbsp";
    }
    $space--;

    for ($j=1; $j<=$i; $j++){
        echo $i." ";
    }
    echo "<br>";

}

?>