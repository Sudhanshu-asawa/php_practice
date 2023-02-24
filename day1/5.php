<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Change</title>
</head>
<body>
    <?php
    $text = "This is Sigma";
    $text = preg_replace('/(\b[a-z])/i','<span style="color: green">\1</span>',$text);
    echo "<h1>$text</h1>";

    ?>
</body>
</html>