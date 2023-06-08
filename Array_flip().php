<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>here the key replace by value and value replaced by key i.e swap or flip</h2>
    <?php 
        $a1= ['a'=> 'red','b' => 'green', 'c' => 'blue', 'd'=>'yellow'];

        $result = array_flip($a1);

        echo "<pre>";
        print_r($result);
        echo "</pre>";
    ?>
</body>
</html>