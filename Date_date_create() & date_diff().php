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

        $date1 = date_create("15-12-2013"); //date_crate(date_formate)
        $date2 = date_create("12-03-2013"); //date_create(date formate)

        $diff = date_diff($date1, $date2);//date_diff(object1, object2, absolute); date_diff($diff1, $diff2, True/false)

        echo $diff -> format("%r %a days %m month ");//%r = + or - value represent and %a = days %m = month 

        echo "<pre>";
        print_r($diff); //array result
        echo "</pre>";

    ?>
</body>
</html>