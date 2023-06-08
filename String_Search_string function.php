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
        $str = "I Love PHP, I love php too!";

        $res = strstr($str,"php",); //strstr(string, search,before_search(true)defult false)
        $res2 = strstr($str,"php",true); //strstr(string, search,before_search(true)defult false)

        $res3 = strchr($str,"love"); //strchr(string,search,befour_search(default false))
        
        
        //strchr(string,search,true)

        $res5 = stristr($str,"LovE"); // stristr(string,search,before_search)

        $res6 = strpbrk($str,"o");


        echo "<pre>";
        
        print_r($res);
        echo "<br>";
        
        print_r($res2);
        echo "<br>";

        print_r($res3);
        echo "<br>";

        print_r($res4);
        echo "<br>";

        print_r($res5);
        echo "<br>";

        
        print_r($res6);
        echo "<br>";
        echo "</pre>";

        

        
    ?>
</body>
</html>