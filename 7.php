<?php

$result = 0;

for ($i = 1; $i <= 10; $i++){
    for ($j = 1; $j <= 8; $j++){
        $result = $i * $j;
        echo $j."x".$i." = ".$result.", ";
    }
    echo "<br>";
}

?>