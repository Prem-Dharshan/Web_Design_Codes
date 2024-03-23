<!-- Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers.  -->

<?php
$d = 'A00';

for ($i = 1; $i <= 5; $i++) {
    $result = ++$d;
    echo "$result\n<br>";
}
?>
