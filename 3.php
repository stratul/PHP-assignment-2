<?php

$number = 7;
echo "The first ".$number." natural number is:<br>";

for ($i = 1; $i <= $number; $i++){
    echo $i. "<br>";
}

$result = 0;
echo "The sum of first ".$number." natural number is:<br>";

for ($i = 1; $i <= $number; $i++){
    $result = $result + $i;
}

echo $result;

?>