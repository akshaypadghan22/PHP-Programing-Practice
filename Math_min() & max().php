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
        $str = min(23,43,11,54,32,65,55);
        echo $str."<br>";

        $str = max(23,43,11,54,32,65,55);
        echo $str."<br>";

        $str = min([12,43,32,65,34,44]);
        echo $str."<br>";

        $str = max([33,43,65,22,33,55,]);
        echo  $str . "<br>";

        $str1 = min( [22,13,25,26,27,37], [12,23,14,15,16,76] );
        echo "<pre>";
        print_r($str1);
        echo "</pre>";

        $str1 = max6( [22,13,25,26,27,37], [12,23,14,15,16,76] );
        echo "<pre>";
        print_r($str1);
        echo "</pre>";

    ?>

</body>
</html>