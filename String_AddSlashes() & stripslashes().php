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
        $str = 'Welcome to our "addslashes"';

        echo $str."<br>";

        echo addslashes($str);

        $newstr = addslashes($str);

        echo "<br>";

        echo stripslashes($newstr);
        echo "<br>";

        $newstr2 = addcslashes($str, "Wae"); //addcslashes(String, characters);
        echo $newstr2;//

        echo "<br>";

        $newstr3 = addcslashes($str,"A..Z"); //addslashes(String, form A to Z) ;
        echo $newstr3;

        echo "<br>";

        $newstr3 = addcslashes($str,"a..z");//addslashes(String, form a to z) ;
        echo $newstr3;

        echo "<br>";

        echo stripslashes($newstr); //stripslashesh(String) remove the slashesh 
        echo "<br>";

        echo stripslashes($newstr2); //stripslashes(String) remove the slashesh
        echo "<br>";

        echo stripslashes($newstr3); //stripslashes(String) remove the slashes
        echo "<br>";

        echo stripcslashes($newstr3);// stripcslashesh(String) remove slashse but some text show in boxes not proper ans showing


    ?>
</body>
</html>