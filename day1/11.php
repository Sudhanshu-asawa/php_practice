<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArmStrong number</title>
</head>
<body>
    <?php
    function Armstrong($n){
        while($n>0){
            $r = $n%10;
            $sum += $r*$r*$r;
            $n=$n/10;
        }

        return $sum;
    }

    $a = 407;
    $sum = Armstrong($a);
    if($sum == $a){
        echo "$a is an Armstrong Number";
    }
    else{
        echo "$a is not an Armstrong Number";
    }

    ?>
</body>
</html>