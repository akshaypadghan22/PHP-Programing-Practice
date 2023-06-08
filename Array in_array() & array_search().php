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

            $a = ["Sanjay", "Amar", "55","nilesh", "vedant"];

            echo in_array("Amar", $a); // find in array gives 1 output
            echo in_array("Aman",$a)."<br>"; // find in array gives 0 output\\
            echo array_search("nilesh",$a);

            if (in_array(55, $a, true)) {
                # code...
                echo "<br>"."find Succesfully";
            }else{
                echo "Cant Find";
            }
    
    ?>

    <?PHP 
        
        $ab= [
            ['p','k'],
            ['r','r']
        ];
            
        if (in_array(['p','k'], $ab)) {
            # code...
            echo "<br>Find Successfully";
        }else{
            echo "<br>Cant Find";
        }
        ?>
        <?php 
            $food = [

                'a' => 'orange', 
                'b' => 'banana',
                'c' => 'apple'

            ];

            echo array_search('apple',$food);
        ?>
</body>
</html>


