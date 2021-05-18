<?php

$n = 17;
$space = ($n-1)/2;
$space2 = 2;

for ($i=1; $i<=($n+1)/2; $i+=2){

    for ($l=1; $l<=$space; $l++){
        echo "&nbsp";
    }
    $space-=2;

    for ($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
    
}

for ($i=($n-3)/2; $i>=1; $i-=2){
    
    for ($l=1; $l<=$space2; $l++){
        echo "&nbsp";
    }
    $space2+=2;

    for ($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
    
}

?>