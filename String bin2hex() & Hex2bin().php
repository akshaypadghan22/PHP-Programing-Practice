<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=0, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $str = bin2hex("Hello word earth");
        echo "Bin2Hex => ". $str."<br>";

        echo "Hex2Bin =>". hex2bin($str);
        *-
    ?>
</body>
</html>