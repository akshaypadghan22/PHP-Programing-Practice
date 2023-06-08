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
        $car = array("Company" => "Honda", "Model" => "HondaCity","CC" => 800, "Average" => 25, "Price" => 800000);

        echo "<pre>";
            
            print_r($car);
            var_dump($car);
            var_dump($car);

        echo "</pre>";

    ?>
</body>
</html>