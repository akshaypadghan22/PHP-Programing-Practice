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

            $car = [

                        "Company" => "Maruti",
                        "Model" => "Swift",
                        "Series" => "Yj122",
                        "Price" => "8000000",
                        
                    ];

                    foreach ($car as $key => $value) {
                        
                        echo "</td>$key = $value .</td>";   
                    }
                    
        ?>
</body>
</html>