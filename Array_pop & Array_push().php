<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?PHP 
            $a = ["sanjay","Aman", "Rehman"];

            array_pop($a); //last element of array is delete Last index key 
            echo "<PRE>";
            print_r($a);
            echo "</pre>";

            array_push($a,"Akshay","Darshna","Suraj "); //add new element in array at Last index key position
            echo "<PRE>";
            print_r($a);
            echo "</pre>";

            

        ?>
</body>
</html>