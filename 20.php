<?php

$n = 7;
$space = $n-1;

for ($i=1; $i<=$n; $i+=2){

    for ($l=1; $l<=$space; $l++){
        echo "&nbsp";
    }
    $space-=2;

    for ($j=1; $j<=$i; $j++){
        echo "* ";
    }
    echo "<br>";
    
}

?>