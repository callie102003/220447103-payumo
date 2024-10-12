<?php
$correctPassword = "password123";
$userInput = "";

do {
    $userInput = readline("Please enter the password: ");

    if ($userInput !== $correctPassword) {
        echo "Incorrect password, try again.\n";
    }
} while ($userInput !== $correctPassword);

echo "Access Granted.\n";
?>
