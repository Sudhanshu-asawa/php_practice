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
    $temp1 = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
    $temp=explode(",",$temp1); 
    sort($temp);
    foreach($temp as $v){
        $sum+=$v;
    }
    $len = count($temp);
    $avg = $sum/$len;
    echo "The Average of Tempratures is :- ".$avg."<br>";
    echo "The Min 5 Tempratures are :- ";
    for($i=0;$i<5;$i++){
        echo $temp[$i]." ";
    }
    echo "<br>";
    echo "The Max 5 Tempratures are :- ";
    for($i=$len-5;$i<$len;$i++){
        echo $temp[$i]." ";
    }





    ?>
</body>
</html>