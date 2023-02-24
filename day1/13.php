<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrau Unique</title>
</head>
<body>
    <?php
    $arr = array(1,2,3,2,1,3,5,4,5);
    print_r(array_values(array_unique(($arr))));
    ?>
</body>
</html>