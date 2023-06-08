<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=0, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            // $number = array(1,2,3,4,5,6,7); //define array method 1

            $number = [1,2,3,4,5,6,7]; // define array method 2

            echo $number[0]."<br>"; //call the array in diffrent array index value 
            echo $number[1]."<br>";//call the array in diffrent array index value
            echo $number[2]."<br>"; //call the array in diffrent array index value
            echo $number[3]."<br>"; //call the array in diffrent array index value
            echo $number[4]."<br>"; //call the array in diffrent array index value
            echo $number[5]."<br>";  //call the array in diffrent array index value
            echo $number[6]."<br>";  //call the array in diffrent array index value
            
        ?>
        <?php
            $car = ["Maruti", "Swift Dezier", "Car", 2023, 1000000];
            echo "<ul>";
            for($i = 0; $i<5; $i++){
                echo "<li>".$car[$i]."<br>" ."</ul>";
            }

             echo "<ul>";
             echo "<pre>";
             print_r($car);
             echo "</pre>";   
             
        ?>
        <?php
            
        ?>
</body>
</html>