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

            function factorial($a){
                if($a == 0)
                {
                    return 1;
                }
                else {
                    return ($a * factorial($a - 1));
                }
            }
            echo  factorial(5);

    ?>
</body>
</html>