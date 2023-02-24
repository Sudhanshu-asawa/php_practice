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
    echo "All the numbers between 50 and 150
    that are divisible by 4 are:- ";
    for($i=50;$i<151;$i++){
        if($i%4==0){
            echo $i."  ";
        }
    }
    ?>
    
</body>
</html>