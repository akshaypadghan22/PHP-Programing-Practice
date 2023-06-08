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

        // $a= ["sanjay","Akash","balu","pillu","sanjay"];

        $b = [
               "name" => ["sanjay","Akash","balu","pillu"],
               "fruit" => ["ornage","banana","apple"]
            ];

        // $length =  count($b,1)."<br>"; //here default value is 0 and 1 is internal value of array count
        $len = count($b["fruit"],1);
        echo count($b);        // for ($i=0; $i < $len; $i++) { 
            
             
        //     print_r($b[$i]);
        
        // }

        // echo "<pre>";
        // print_r( array_count_values($a)) ;
        // echo "</pre>";

        // echo "<pre>";
        // print_r(sizeof($a)) ;
        // echo "</pre>";
        
    ?>
</body>
</html>