<?php
$fibonacci = [0, 1];
$limit = 10; 
$i = 2; 
while ($i < $limit) {
    $nextNumber = $fibonacci[$i - 1] + $fibonacci[$i - 2];

    $fibonacci[] = $nextNumber;
    $i++; 
}
echo implode(" ", $fibonacci) . "\n";
?>
