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

        echo "date: ". date("d"). "<br>"; //date("d") retrun number formated date eg. 01, 02, 04. 06 in that condition date retrun with 0 
        echo "date: ".date("j"). "<br>";//date("j") retrun number formated date eg. 1, 3, 6 ... in that condition date retrun without 0
        echo "date: ". date("dS"). "<br>";//date("d") retrun number formated date eg. 01st, 02nd, 3rd, 12th in that condition date retrun without 0
        echo "date: ". date("jS"). "<br>";//date("d") retrun number formated date eg. 1st, 2nd, 3rd, 4th, 11th in that condition date retrun without 0

        echo "<hr>";
        echo "month: ". date("F"). "<br>"; //date("F") retrun word formated by month eg. April, May, June.. in that condition month retrun without number only stirng return
        echo "month: ". date("M"). "<br>";//date("M") retrun word formated by month eg. Apr, May, Jun.. in that condition month retrun without number retrun only short form word of month
        echo "month: ". date("m"). "<br>";//date("m") retrun number formated by month eg. 04, 05, 06.. in that condition month retrun with 0
        echo "month: ". date("n"). "<br>";//date("n") retrun number formated by month eg. 4, 5, 6.. in that condition month retrun without string or 0 only single number return

        echo "<hr>";

        echo "Year: ". date("Y")."<br>"; // date("Y") retrun full year number eg. 2023
        echo "Year: ". date("y")."<br>"; // date("y") retrun only half of vlaue of year eg. 23
        
        echo "<hr>";
b
        echo "Day: ".date("D")."<br>"; // date("D") retrun on this date which of the day e.g "Tue" return only short form name
        echo "Day: ".date("l")."<br>"; // date("l") retrun on this date which of the day e.g "Tuesday" return full form name
        echo "Day: ".date("N")."<br>";  // date("D") retrun on this date which of the day e.g 02 return only number without 0, here monday = 1, tuesday = 2,....,sunday = 7... 
        echo "Day: ".date("w")."<br>"; // date("D") retrun on this date which of the day e.g 02 return only number without 0 here sunday = 0, monday = 1, tuesday = 2... 
        
        echo "<hr>";
        echo "full date: ".date("d"."/"."F"."/"."Y"."/"."l"). "<br>";
        echo "<hr>";

        echo "Day is in year: ".date("z")."<br>"; //date("z") retrun current number of hole year suppose in year have 360 days and today is 91 day
        echo "Week of the year: ".date("W"). "<br>"; // date("W") retrun week of year 
        echo "how many day in this current month: ". date("t"). "<br>"; //date("t") return how many days in this currnt month
        echo "current month is leap or not: ".date("L"). "<br>"; // date("L") retrun only 0 or 1 value if leap then return 1 otherwise false 0


    ?>
</body>
</html>