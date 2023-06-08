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
    
        echo "Hour: ".date("h"). "<br>"; // date("h"); return contry hour defalut set europ/barilin in 01, 02 03... 12;
        echo "Hour: ".date("H"). "<br>"; // date("H"); return hour in 01, 02, 03, 04...24;
        echo "Hour: ".date("g"). "<br>"; // date("g"); return hour in 1, 2, 3, 4, 5,...12;
        echo "Hour: ".date("G"). "<br>"; // date("G"); return hour in 0, 1, 2, 3, 4,...24;
             
        echo "Minute: ". date("i"). "<br>"; // date("i"); return minute 
        
        echo "Second: ". date("s"). "<br>"; // date("s"); return second
        echo "Maradian in small letter: ". date("a")."<br>";  //date("a"); return maridian in anti Maridian AM or PM
        echo "Mardian in capital letter: ". date("A"). "<br>"; // date("A"); return maradian in Post Maridian AM or PM

        echo "Time is: ". date("h:i:sa e"). "<br>"; // Full time
        
        echo "date_default_timezone_set('Asia/Kolkata')". "<br>";
        date_default_timezone_set("Asia/Kolkata"); 
        echo "Time is: ". date("h:i:sa"). "<br>";                           
        echo "Time is: ". date("h:i:sa e"). "<br>";  
    ?>
</body>
</html>