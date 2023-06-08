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
        function test_odd($var)
        {
            return($var & 1);
        }
        $a1 = [1,3,2,3,4,7];
        $res = array_filter($a1,"test_odd");
        echo "<pre>";
        print_r($res);
        echo "</pre>";
    ?>
</body>
</html>