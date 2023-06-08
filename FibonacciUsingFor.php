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
        $num = 12;
        echo "<h2>Fibonacci series using recursive function</h2>";
        echo "\n";

        function series($num){

            if($num == 0)
            {
                return 0;
            }else if($num == 1 ){
                return 1;
            }
            return( series($num-1)+series($num-2));
        }

        for($i=0; $i<$num; $i++)
        {

            echo series($i);

            echo "<br>";

        }
    ?>
</body>
</html>