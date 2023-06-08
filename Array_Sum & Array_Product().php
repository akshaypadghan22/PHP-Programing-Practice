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
        $a = [10,20,30,40,50];

        $res = array_sum($a);

        echo $res;
    ?>

    <hr>

    <?php 
        $res = array_product($a);

        echo $res;
        
    ?>

</body>
</html>