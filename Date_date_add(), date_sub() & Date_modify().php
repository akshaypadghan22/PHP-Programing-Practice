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
        $date = date_create("15-05-2015");
        
       date_add($date, date_interval_create_from_date_string("15 days"));
       echo date_format($date, "d-m-Y"). "<br>";

       date_sub($date, date_interval_create_from_date_string("5 days"));
       echo date_format($date, "d-m-Y"). "<br>";

       date_modify($date, "10 days");
       echo date_format($date, "d-m-Y"). "<br>";
       
       

    ?>
</body>
</html>