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
        $str = "Hello word!";
        echo $str."<br>";
        
        echo trim($str,"He");
        echo "<br>";
        echo trim($str,"word!");
        echo "<br>";
        echo trim($str,"Hrd!");
        echo "<br>";
        echo trim($str,"Hello");
        echo "<br>";
        echo rtrim($str,"d!");
        echo "<br>";
        
        $str2 = " hello word welcome ";

        echo $str2."<br>";
        
        echo trim($str2); //remove extra space in string at start and end 

        echo "<br>";

        echo chop($str,"d!") //chop(String,"right last string")// chop function is word same as the $rtrim only right trim is work

    ?>
</body>
</html>