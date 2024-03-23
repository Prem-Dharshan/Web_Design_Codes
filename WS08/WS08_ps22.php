<!-- Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "CAR" instead of the number and for the multiples of five print "BU". For numbers which are multiples of both three and five print "CARBUS" -->


<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "CARBU ";
    } elseif ($i % 3 == 0) {
        echo "CAR ";
    } elseif ($i % 5 == 0) {
        echo "BU ";
    } else {
        echo $i . " ";
    }
    echo "<br>";
}
?>
