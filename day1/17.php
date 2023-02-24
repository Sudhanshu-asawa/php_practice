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
    function multiply($x,$y){
        $a = explode(" ",$x);
        $b = explode(" ",$y);
        foreach($a as $key=>$value){
            $result[$key]=$a[$key]*$b[$key];
        }
        return implode(" ",$result);
    }

    echo multiply(("10 20 30"),("1 2 3"))."<br>";
    ?>
</body>
</html>