<?php
$inputString = readline("Enter a string to reverse: ");
$reversedString = "";

$length = strlen($inputString); 
for ($i = $length - 1; $i >= 0; $i--) {
    $reversedString .= $inputString[$i]; 
}

echo "Reversed string: $reversedString\n";
?>
