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
        $str= "Hello word welcome to php word";

        $res = strlen($str); //strlen(string) count the character in string

        $res2 = str_word_count($str);

        $res3 = substr_count($str,"word");

        echo "<pre>";
        print_r($res);
        echo "<br>";
        print_r($res2);
        echo "<br>";
        print_r($res3);
        echo "</pre>";

    ?>
</body>
</html>