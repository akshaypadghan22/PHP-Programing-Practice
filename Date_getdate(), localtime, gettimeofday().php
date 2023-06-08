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
           
           $date = getdate(); // getdate(); retrun array of current date and time
           echo $date['month']. " - ". $date["year"]. "<br>";
           
           echo "<hr>";

           $olddate = mktime(0,0,0,04, 22, 2023); 
           $date = getdate($olddate); //getdate(timestamp); return old date and time using mktitme()
           echo $date["mday"]." - ".$date['month']." - ".$date['year']. "<br>";

           echo "<hr>";

           echo "<pre>";
           print_r($date);
           echo "</pre>";
           
           echo "<hr>";
           
           echo "<pre>";
           print_r(getdate());
           echo "<pre>"; 

           echo "<hr>";

           echo "<br>";
           print_r(gettimeofday()); // gettimeofday(); retrun current date of time in array formate
           echo "</pre>";

           $date = gettimeofday();
           echo "sec: ". $date['sec']. "<br>"; //retrun only the sec 

           echo "sec in float: ". gettimeofday(true); //"return the sec in float format"

           echo "<hr>";

           echo "<pre>";
           print_r(localtime(time(), true));// localtime(time(), true); return local host time and date 
           echo "<pre>";

           echo "<hr>";

           $olddate = mktime(0,0,0,22-03-2023); 
           $date = localtime($olddate, true);// localtime(object, true); return local host old date of  time and date

           echo "<pre>";
           print_r($date);
           echo "</pre>";
           
           ECHO "<HR>";
           
           echo "tm-yday: ".$date['tm_yday'];



        ?>
</body>
</html>