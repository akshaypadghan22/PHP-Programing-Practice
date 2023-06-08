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

        $str = "Hello word I love php, I love php too!";

        echo str_replace("php","python",$str);
        echo "<br>";

        echo str_ireplace("PHP","PYthon",$str);
        echo "<br>";
        
        echo substr_replace("I like PHP",10,20);
        echo "<br>";

        $arr = ["Hello", "php"];
        $arr2 = ["Hi", "python"];

        echo str_replace($arr, $arr2, $str);
        echo "<br>";
        
        echo strtr($str, "lo", "Hi");
        echo "<br>";

        $array = ["Hello" => "Hi", "php" => "Java"];
        echo strtr($str, $array);


    ?>
</body>
</html>