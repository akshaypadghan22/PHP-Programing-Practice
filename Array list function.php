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
        $cars = [
                    ["Maruti","TVS","Honda","Hero","TATA"],
                    ["Royals Roy", "Royal Enfiled","Swift", "Fortuner","Ford"]
                ];
    
                echo "<table  border = 2px cellspacing = 0px cellpadding=10px>";
              foreach($cars as list($v1, $v2, $v3, $v4, $v5)){
            echo "<tr><td>$v1</td> <td>$v2</td> <td>$v3</td> <td>$v4</td> </tr>";
        }
        echo "</table>"
    ?>
</body>
</html>