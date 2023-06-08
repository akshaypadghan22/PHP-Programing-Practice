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
        $emp = [
                [101, "Rakesh","Manager",50000,"Pune"], 
                [102,"Ravi","Accountant",35000,"Mumbai"],
                [103, "Shubham", "Software Tester",38000, "Nagpur"],
                [104, "Tejaswini", "Software developer",60000,"Yavatmal"],
                
        ];

        // echo "<pre>";
        // print_r($emp);
        // echo "</pre>";

        // for($row=0; $row<4;$row++){
        //     for($col=0; $col<4; $col++){
        //         echo $emp[$row][$col]." ";
        //     }
        //     echo "<br>";
        // }

       echo "<table border = 2px solid cellspacing = 0px cellpadding = 10px> 
            
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
            <th>City</th>
            
        </tr>
            
       ";


        foreach ($emp as $outer) {
            echo "<tr>";
            foreach ($outer as $inner) {
           
                echo "<td>".$inner."</td>";

            }
            echo "<tr>";
            // echo "<br>";

        }

        echo "</table>";


    ?>
</body>
</html>