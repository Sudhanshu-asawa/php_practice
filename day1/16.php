<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sum($n)
    {
        while ($n > 0) {
            $r = $n % 10;
            $sum += $r;
            $n /= 10;
        }
        return $sum;
    }
    echo sum(200);
    ?>

</body>

</html>