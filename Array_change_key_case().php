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
        $color = ['R'=>"red",'G'=>"green",'b'=>"blue",'w'=>"white"];
        $res = array_change_key_case($color, CASE_UPPER);

        echo "<pre>";
        print_r($res);
        echo "</pre>";


    ?>
</body>
</html>