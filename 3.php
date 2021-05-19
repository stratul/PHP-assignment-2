<?php

$number = 7;
echo "The first ".$number." natural number is: ";

for ($i = 1; $i <= $number; $i++){
    echo $i. " ";
}

$result = 0;
echo "<br>The sum of first ".$number." natural number is: ";

for ($i = 1; $i <= $number; $i++){
    $result = $result + $i;
}

echo $result;

?>