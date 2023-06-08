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
        $str = "Hello <b> World </b>,Hello <i> Earth </i>";

        echo "String:".$str. "<br>";
        echo "Strip_tags() : ".strip_tags($str). "<br>";

        echo "Wordwrap() :". wordwrap($str,4, "<br>"); // wordwrap(string, break(4), "<br>",) // by default value set as false
        

        echo "Wordwrap() :". wordwrap($str,4, "<br>", TRUE);

     ?>
</body>
</html>