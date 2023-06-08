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

        $color = ["red", "green","blue","pink","white"];

        array_shift($color); //first vlaue of array delete using shift function and o index key replace by second value and so on..

        echo "<pre>";
        print_r($color);
        echo "</pre>";


    ?>
    <hr>
    <?php 
        array_unshift($color, "brown", "Black","purple");
        //unshift func used for add one or mulitiple  new array fron first position
        echo "<pre>";
        print_r($color);
        echo "</pre>";

        $res = array_search("Black",$color);
        echo "<pre>";
        print_r($color[$res]);
        echo "</pre>";

        
    ?>
</body>
</html>