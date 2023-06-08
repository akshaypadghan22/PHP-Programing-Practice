<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP 
    
        $str = "Hello word, welcome to word beutiful ";

        $res = strpos($str,"word",5);
        $res2 = strrpos($str, "word",10);    
        $res3 = stripos($str,"WoRd",5);
        $res4 = strripos($str,"WORD",5);


        echo "<pre>";
        print_r("strpos: ".$res);
        echo "<br>";
        print_r("strrpos: ".$res2);
        echo "<br>";
        print_r("stripos: ".$res3);
        echo "<br>";
        print_r("strripos: ".$res4);
        echo "</pre>";

    ?>
</body>
</html>