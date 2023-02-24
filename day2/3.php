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
    $arr = array(1,2,3,4,5);
    echo "Orignol array:- ";
    foreach($arr as $i){
        echo $i." ";
    }

    echo "<br>Afetr Appending 9 at 3rd position :- ";
    array_splice($arr,3,0,9);
    foreach($arr as $v){
        echo $v." ";
    }
    
    ?>
</body>
</html>