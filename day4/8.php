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
    $text = "Sigma is the best";
    $p="|the|";
    echo "Original String :- $text <br>";
    echo "After change:- ".preg_replace($p,"best",$text,1);
    ?>
</body>
</html>