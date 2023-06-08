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

            $student = [
                "Raman" => ["Physics"=>78,"Chemistry"=>76,"Math"=> 89],
                "Nita" => ["Physics"=>59,"Chemistry"=>73,"Math"=> 67],
                "Amar" => ["Physics"=>81,"Chemistry"=>65,"Math"=> 55],
                "Ramesh" => ["Physics"=>77,"Chemistry"=>62,"Math"=> 88]
            ];

            // echo "<pre>";
            // print_r($student);
            // echo "</pre>";


            echo "<table border=2px solid cellspacing = 0px cellpadding = 10px>
                <tr>
                    <th>Name</th>
                    <th>Phisics</th>
                    <th>Chemestry</th>
                    <th>Mathematics</th>
                </tr>
            ";

            foreach ($student as $key => $v1) {
                # code...
                echo "<tr>";
                echo "<td> $key </td>";
                foreach ($v1 as $v2) {
                    # code...
                    echo "<td> $v2 </td>";
                }
                echo "</tr>";
                // echo "<br>";
            }
            echo "</table>"


            

        ?>
</body>
</html>