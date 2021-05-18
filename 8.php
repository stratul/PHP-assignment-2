<?php

$result = 1;
$odd = 1;
$number = 10;

echo "The odd numbers are: 1 ";

for($i=1; $i<=$number -1 ; $i++){
    $odd+=2;
    echo $odd." "; 
    $result+=$odd;
}
echo "<br>"."The Sum of odd Natural Number upto ".$number." terms: ".$result;


?>