<!-- Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum -->

<?php
function computeSum($num1, $num2) {
    $sum = $num1 + $num2;
    if ($num1 == $num2) {
        $sum *= 3;
    }
    return $sum;
}

    $num1 = 5;
    $num2 = 5;
    echo "Sum: " . computeSum($num1, $num2); // Output: Sum: 30 (since both numbers are the same, the sum is tripled)

    $num1 = 7;
    $num2 = 3;
    echo "<br>Sum: " . computeSum($num1, $num2); // Output: Sum: 10 (since the numbers are different, the sum is not tripled)
?>
