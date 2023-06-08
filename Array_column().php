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
        $color = [
                    [
                        'id' => 101,
                        'fname' => 'Devil',
                        'lname' => 'Laes',
                    ],
                    [ 
                        'id' => 102,
                        'fname' => 'ramanuj',
                        'lname' => 'bewaja',
                    ],
                    [
                        'id' => 103,
                        'fname' => 'Nhi',
                        'lname' => 'milta',
                    ]

                ];
        $res = array_column($color,'id');
        $res1 = array_column($color,  "fname","id");
        echo "<pre>";
        print_r($res);
        print_r($res1);
        echo "</pre>";

    ?>
</body>
</html>