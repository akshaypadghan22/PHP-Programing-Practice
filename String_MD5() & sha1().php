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
        $pass = "Hello
        ";

        echo "The String:".$pass."<br>";

        // echo "md5: Binary: ". md5($pass,True)."<br>";

        echo "md5: Hex: ".md5($pass,false). "<br>";

        // echo "sha1 Binary: ". sha1($pass,true)."<br>";

        // echo "sha1 Hex: ".  sha1($pass)."<br>"; // by defalut is false value set

        
        if(md5($pass) == "8b1a9953c4611296a827abf8c47804d7")
        {
            echo "Password is match";
        }
        else{
            echo "please check password";
        }


    ?>
</body>
</html>