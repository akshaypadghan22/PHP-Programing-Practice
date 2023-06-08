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

            echo rand(). "<br>"; //rand() retrun random number while we refresh
            echo rand(). "<br>"; //rand() retrun random number while we refresh
            echo rand(1,10). "<br>"; //rand(min, max) return random number between min and max value 
            echo rand(20,100). "<br>"; //rand(min, max) return random number between min and max value 
            
            echo "<hr>";
            
            echo mt_rand(). "<br>"; // mt_rand() mersenne twister algorithm,  return random value  it is upgread function than rand() it  more acuracy than rand()
            echo mt_rand(10,50). "<br>"; // mt_rand(min, max, mersenne twister algorithm, retrun random value it is return given value between min and max value  while refresh

            echo "<hr>";

            echo lcg_value(). "<br>"; // lcg_value() retrun 0 to 1 random value in decimal fomat in fraction
        ?>
</body>
</html>