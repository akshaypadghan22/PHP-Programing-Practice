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
        echo "<pre>";
        print_r(date_parse("2023-03-15 12:30:25.5"));
        echo "</pre>";

        $date = date_parse("22-4-2023 12:30:25.14");
        echo $date['day'];
         
        echo "<pre>";
        print_r(date_parse_from_format("d.m.Y","04.22.2023"));
        echo "</pre>";

        
    ?>
</body>
</html>