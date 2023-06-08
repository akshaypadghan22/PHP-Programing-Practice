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

        $date = date_create("2023-04-22  ", timezone_open("Asia/kolkata"));

        echo date_format($date, "l")."<br>";

        echo date_format($date, "d-m-Y h:i:sA"). "<br>";

        $date = date_create("2013-03-15");

        echo date_format($date , "d-m-Y");

        

    ?>
</body>
</html>