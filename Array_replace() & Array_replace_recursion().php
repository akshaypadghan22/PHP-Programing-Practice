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

            $cars=[ 
                    'a'=>["Snajay"],
                    'b'=>["Aman"],
                    'c'=>["Rehaman"],
                    'd'=>["Karan"]
            ];

            $bike=['a'=>["TVS"],
                     'c' =>["Honda"]
        ];
            echo "<pre>";
            print_r( array_replace($cars, $bike ));
            echo "</pre>";

        ?>
</body>
</html>