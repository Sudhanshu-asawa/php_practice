<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <?php
    $sum=0;
    for($x=2;$x<200;$x++){
        $prime = true;
        for($y=2;$y<$x;$y++){
            if($x%$y==0){
                $prime = false;
            }
            }
        if($prime){
            $sum+=$x;
        }
    }
    echo $sum;
    ?>
    
</body>
</html>