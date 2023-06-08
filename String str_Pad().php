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
        $str = "hello word";

        echo str_pad($str,20,".");
        echo "<br>";
        echo str_pad($str,20,".",STR_PAD_BOTH);
        echo "<br>";
        echo str_pad($str,20,".",STR_PAD_LEFT);
        echo "<br>";
        echo str_pad($str,20,".",STR_PAD_RIGHT);
    ?>
</body>
</html>