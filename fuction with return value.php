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

            function sum($a, $b){
                $v = $a + $b;
                return $v;    
            }
            $a = sum(10,20);
            // echo "Addition $a ";

            function sum1($math, $eng, $sci){
                
                $s = $math + $eng + $sci;
                
                return $s;

            }

            $total = sum1(66,58, 78);
            
            

            function percentage($st){
                
                $per = floor($st/3);
                
                echo $per;
                
            }

            percentage($total);

           

    ?>
</body>
</html>