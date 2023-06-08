<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Array rand is array random and array shuffle</h2>
    <?php
        $color = ["red", "green", "Blue", "white", "Pink","Gray"];

        $res = array_rand($color,5);

        echo "<pre>";
        print_r($res);
        print_r($color[$res[0]]."<br>");
        print_r($color[$res[1]]."<br>");
        print_r($color[$res[2]]."<br>");
        print_r($color[$res[3]]."<br>");
        print_r($color[$res[4]]);
        echo "</pre>";























        
    ?>   
</body>
</html>