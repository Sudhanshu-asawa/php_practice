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
    $arr = array("abcd","abc","de","hjjj","g","wer");
    $newarr = array_map("strlen",$arr);
    echo "The shortest array length is " . min($newarr) .
". The longest array length is " . max($newarr).'.';
    ?>
</body>
</html>