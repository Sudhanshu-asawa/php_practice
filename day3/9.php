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
    
    for($i=1;$i<11;$i++){
        if($i%2!=0){
            $sum += $i ;
        }
    }
    echo "Sum of all odd numbers from 1 to 10 are:- ".$sum;
    ?>
</body>
</html>