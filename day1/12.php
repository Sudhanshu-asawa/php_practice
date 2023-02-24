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
    function word($s){
        $r = explode(";",$s);
        $result = "";
        foreach($r as $v){
            switch(($v)){
                case "nine":
                    $result .= "9";
                    break;
                case "eight":
                    $result .= "8";
                    break;
                case "seven":
                    $result .= "7";
                    break;
                case "six":
                    $result .= "6";
                    break;
                case "five":
                    $result .= "5";
                    break;
                case "four":
                    $result .= "4";
                    break;
                case "three":
                    $result .= "3";
                    break;
                case "two":
                    $result .= "2";
                    break;
                case "one":
                    $result .= "1";
                    break;
                case "zero":
                    $result .= "0";
                    break;
                
            }
        
        }
        return $result;
    }

    echo word("nine;six;seven")."<br>";
    echo word("three;two;three");
    ?>
</body>
</html>