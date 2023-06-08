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
            $color = ["a"=>'red', 'b'=>'green', 'c'=>'red', 'd'=>'yellow'];

            $res = array_values($color);
            $res2 = array_unique($color);

            echo "<pre>";
            print_r($res);
            print_r($res2);
            echo "</pre>";


        ?>    
</body>
</html>