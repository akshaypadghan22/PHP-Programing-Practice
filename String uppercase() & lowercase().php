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
        $str = "hello word Welcome to PHP";
        $str2 = "Hello Welcome to beutifull word!";

        $res = strtolower($str); //strtolower(string) convert all string to lower case
        
        $res2 = strtoupper($str); // strtoupper(string) converall sting to upper case
        
        $res3 = ucfirst($str); //ucfirst(string) convert first character of string to uppercase

        $res4 = lcfirst($str2); //lcfirst(string) convert fist character of string to lowercase

        $res5 = ucwords($str2); //ucwords(string) convert each first character of word to uppercase

        

        echo "<pre>";
        print_r($res); 
        
        
        echo "<br>";
        print_r($res2);

        echo "<br>";
        print_r($res3);
        
        echo "<br>";
        print_r($res4);

        echo "<br>";
        print_r($res2);
        
        echo "<br>";
        print_r($res5);
        
        
        echo "</pre>";
    ?>
</body>
</html>