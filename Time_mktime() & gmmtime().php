<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <H3> <U> TO MAKE THE DATE FOR FUTER OR PAST </U></H3>
    
    <?php 

        date_default_timezone_set("Asia/kolkata");
        echo "Time is: ". date("d-m-Y h:i:s A"). "<br>";


        echo "mkdate: ". date("l", mktime(0, 0, 0 , 04, 22, 2021) ). "<br>"; //mkdir(hour, minute, second, month, day, Year );

        echo "gmmktime: ".date("l", gmmktime(0, 0, 0, 04, 22, 2023)). "<br>";

        echo "mkdate: ". date("d-m-Y-l h:i:s A", mktime(12, 23, 33, 04, 22, 2023)). "<br>";

        // echo;

    ?>
</body>
</html>