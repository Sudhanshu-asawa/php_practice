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
    function letscheck($n){
        $r = $n>30 ? "Greater than 30": ($n>20? "Greater than 20"
        :($n>10
        ? "Greater than 10"
        : "Leass than 10"));

        echo $n." : ".$r."<br>";
        
    
    }

    letscheck(32);
    letscheck(22);
    letscheck(12);
    letscheck(2);
    

    ?>
</body>
</html>