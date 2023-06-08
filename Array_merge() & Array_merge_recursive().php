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

        $color = ["red","blue","green","black","purple"];
        $color2 = ["red",'blue','green','black',"white"];
        $res = array_merge($color, $color2);
        
        $color = ['a'=>"red",'b'=>"blue", "green","black","purple"];
        $color2 = ['a'=>"red",'b'=>'blue', 'green','black',"white"];
        $res2 = array_merge_recursive($color,$color2);

        echo "<pre>";
        print_r($res);
        print_r($res2);
        echo "</pre>";

    ?>
</body>
</html>