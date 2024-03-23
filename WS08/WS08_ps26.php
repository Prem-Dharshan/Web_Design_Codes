<!-- Write a PHP program to make use of all arithmetic operators in echo statement -->

<?php
$a = 10;
$b = 5;

echo "Addition: " . ($a + $b) . "<br>";    // Addition
echo "Subtraction: " . ($a - $b) . "<br>"; // Subtraction
echo "Multiplication: " . ($a * $b) . "<br>"; // Multiplication
echo "Division: " . ($a / $b) . "<br>"; // Division
echo "Modulus: " . ($a % $b) . "<br>"; // Modulus

echo "Increment of a: " . ++$a . "<br>"; // Pre-increment
echo "Increment of b: " . $b++ . "<br>"; // Post-increment
echo "After Increment: " . $b . "<br>"; // After Post-increment

echo "Decrement of a: " . --$a . "<br>"; // Pre-decrement
echo "Decrement of b: " . $b-- . "<br>"; // Post-decrement
echo "After Decrement: " . $b . "<br>"; // After Post-decrement

?>
