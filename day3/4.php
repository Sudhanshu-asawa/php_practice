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

    $text = "techstudyt";
    for($i=0;$i<=strlen($text);$i++){
        if(substr($text,$i,1)=="t"){
            $count += 1;

        }
        
    }
    echo "Count of 't' is :- ".$count;
    ?>
</body>
</html>