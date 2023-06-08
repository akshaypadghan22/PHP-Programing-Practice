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
        $str = "Hello world. It's a beautiful day";

        $res = explode(" ", $str, 7); //explode(seprator,string, limit)

        $res1 = explode(",", $str, 0);

        echo "<pre>";
        print_r($res);
        print_r($res1);
        echo "</pre>";
         

    ?>

    <?php 
        $str = ['Hello', 'world', 'Its', 'a', "beautiful", "day"];

        $res2 = implode(";",$str);//implode(seprator, array)

        echo "<pre>";
        print_r($res2);
        echo "</pre>";
         
        
    ?>
</body>
</html>