<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap</title>
</head>
<body>
    <?php
    $x = 10;
    $y = 100;

    echo "x = $x <br>";
    echo "y = $y <br>";
    echo "After swapping--------------- <br>";

    $z = $x;
    $x = $y;
    $y = $z;

    echo "x = $x <br>";
    echo "y = $y <br>";


    ?>
</body>
</html>