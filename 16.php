<?php

$result = 2;
$even = 2;
$number = 5;

echo "The even numbers are: 2 ";

for($i=1; $i<=$number -1 ; $i++){
    $even+=2;
    echo $even." "; 
    $result+=$even;
}
echo "<br>"."The Sum of even Natural Number upto ".$number." terms: ".$result;


?>