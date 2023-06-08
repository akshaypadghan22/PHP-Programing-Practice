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
        echo intdiv(12,3). "<br>"; // intdiv(divident, divisor) retrun division 3)12 => 4 
        echo intdiv(5,2). "<br>";  // intdiv(divident, divisor) retrun division 2)5 => 2 
        echo intdiv(-4, -2). "<br>"; // intdiv(divident, divisor) retrun division -2)-4 => 2 
        echo intdiv(4, 2.3). "<br>";


        echo "<hr>";

        echo sqrt(5). "<br>"; //sqrt(value) retrun squre_root 
        echo sqrt(5). "<br>";//sqrt(value) retrun squre_root 
        echo sqrt(4). "<br>";//sqrt(value) retrun squre_root 2 

        echo "<hr>";

        echo pow(2,2). "<br>"; //pow(base, exponancial) retrun power of base value to 2, here 2 base and 2 exponancial return 4
        echo pow(2,3). "<br>"; // pow(base, exponancial) retrun power of base value to 2, here 2 base and 3 exponancial return 8
        echo pow(5,5). "<br>";// pow(base, exponancial) retrun power of base value to 2, here 5 base and 5 exponancial return 3125
    ?>
</body>
</html>