<?php
$number = 5; 
$factorial = 1;

for ($i = $number; $i >= 1; $i--) {
    $factorial *= $i;  
}

echo "Factorial of $number is: $factorial\n";
?>
