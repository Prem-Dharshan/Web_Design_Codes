<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
        }
        .square {
            width: 50px;
            height: 50px;
        }
        .white {
            background-color: #f0d9b5;
        }
        .black {
            background-color: #b58863;
        }
    </style>
</head>
<body>
    <h1>Chess Board</h1>
    <div class="board">
        <?php
        // Loop for rows
        for ($row = 1; $row <= 8; $row++) {
            // Loop for columns
            for ($col = 1; $col <= 8; $col++) {
                $isWhite = ($row + $col) % 2 == 0;
                $class = $isWhite ? 'white' : 'black';
                echo "<div class='square $class'></div>";
            }
        }
        ?>
    </div>
</body>
</html>
