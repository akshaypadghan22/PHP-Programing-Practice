<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>fill all the values of with reference of values e.g 'blue' </h2>
    <?php 
        $key = ['a','b','c','d'];

        $a1 = array_fill_keys($key,'blue');

        echo "<pre>";
        print_r($a1);
        echo "</pre>";

        
    ?>
</body>
</html>