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
            echo ceil(0.60)."<br>"; //ceil(value); // return 1 ceil means (chat) (ceiling fan) top value  more than 0.1 greter
            echo ceil(0.50)."<br>"; //ceil(value); // return 1 ceil means (chat) (ceiling fan) top value  more than 0.1 greter
            echo ceil(5)."<br>";//ceil(value); // return 5 ceil means (chat) (ceiling fan) top value if 1 constant
            echo ceil(5.1)."<br>";//ceil(value); // return 6 ceil means (chat) (ceiling fan) top value  more than 0.1 greter i.e 6
            echo ceil(-5.80)."<br>";//ceil(value); // return -5 ceil means (chat) (ceiling fan) top value here negative value in decresing of -5 so return -5

            echo "<hr>";

            echo floor(0.60)."<br>"; // floor(value); //return 0 floor means (farsh) BOTTOM value here 0.60 means return 0
            echo floor(0.50)."<br>";// floor(value); //return 0 floor means (farsh) BOTTOM value here 0.50 means return 0
            echo floor(5)."<br>";// floor(value); //return 0 floor means (farsh) BOTTOM value here 5 means return 5
            echo floor(5.1)."<br>";// floor(value); //return 5 floor means (farsh) BOTTOM value here 5 means return 5
            echo floor(-5.80)."<br>";// floor(value); //return -6 floor means (farsh) BOTTOM value here 0.60 means return -6

            echo "<hr>";

            echo round(0.60)."<br>"; // round(value); //retrun 1 here 0.5 or greter than use next value retrun 1
            echo round(0.50)."<br>"; // round(value); //return 1 here 0.5 or greter than use next value retrun 1
            echo round(5)."<br>"; // round(value); //return 1 here  or greter than use next value retrun 5 or 6
            echo round(5.1)."<br>"; // round(value); //return 6 here 5.5 or less  than use small value retrun 5
            echo round(-5.80)."<br>"; // round(value); //return -6 here -5.5 or greter than use next value retrun -6

            echo "<hr>";

            echo abs(0.60)."<br>"; //abs(value); retrun0.60 here 0.60 have any sign like + or - if have then remove an return actual value here no sgn 
            echo abs(0.50)."<br>";//abs(value); retrun0.50 here 0.60 have any sign like + or - if have then remove an return actual value here no sgn 
            echo abs(5)."<br>";//abs(value); retrun 5 here 0.60 have any sign like + or - if have then remove an return actual value here no sgn 
            echo abs(5.1)."<br>";//abs(value); retrun 5.1 here 0.60 have any sign like + or - if have then remove an return actual value here no sgn 
            echo abs(-5.1)."<br>";//abs(value); retrun -5.1 here 0.60 have any sign like + or - if have then remove an return actual value here no sgn 

            echo "<hr>";
        ?>
</body>
</html>