<!-- Write a program to count 5 to 15 using PHP loop (while and do-while) -->

<?php
    for ($i = 5; $i < 8; $i++) {
        echo "<p>$i</p>";
    }

    $i = 8;
    while ($i < 13) {
        echo "<p>$i</p>";
        $i++;
    }

    $i = 13;
    do {
        echo "<p>$i</p>";
        $i++;

    } while ($i < 16) 

?>