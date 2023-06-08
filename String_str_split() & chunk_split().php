<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        string function <br> str_split();  string splite
    </h3>
    <?php 
        $str = "Hello word!";

        $res = str_split($str,2); //str_split(string, limit)
        $res2 = str_split($str,3);
        $res3 = str_split($str,4);


        echo "<pre>";
        print_r($res);
        print_r($res2);
        print_r($res3);
        
        echo "</pre>";
    ?>
    <hr>
    <h3>chunk_split() function</h3>
    <?php 
        $str = "Hello word Welcome to php";
        $res = chunk_split($str,2); //chunk_split(string, limit)
        $res2 = chunk_split($str,2,"/"); //chunk_split(stringm, limit, seperator)

        echo "<pre>";
        print_r($res);
        print_r($res2);
        echo "</pre>";
    ?>

</body>
</html>