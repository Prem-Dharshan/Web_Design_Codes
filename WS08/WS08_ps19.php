<?php
function checkString($str) {
    $startsWithF = ($str[0] == 'F');
    $endsWithB = ($str[strlen($str) - 1] == 'B');
    
    if ($startsWithF && $endsWithB) {
        return "FizzBuzz";
    } elseif ($startsWithF) {
        return "Fizz";
    } elseif ($endsWithB) {
        return "Buzz";
    } else {
        return $str;
    }
}

$inputStrings = array("FizzBuzz", "Fizz", "Buzz", "Founder");

foreach ($inputStrings as $str) {
    echo checkString($str) . "<br>";
}
?>
