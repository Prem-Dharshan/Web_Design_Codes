<!-- Remove specific element by value from an array in PHP -->

<?php
    $array = array(10, 20, 30, 40, 50);
    print_r($array);
    echo "<br>";

    $valueToRemove = 30;
    $key = array_search($valueToRemove, $array);
    if ($key !== false) {
        unset($array[$key]);
    }
    print_r($array);
?>
