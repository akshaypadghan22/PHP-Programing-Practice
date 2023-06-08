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

        function add($a1,$a2){
            
            return $a1 + $a2;

        }

        $num1 = [11,22,12,21,23,24];
        $num2 = [13,33,32,55,33,54];


        $res = array_map('add',$num1,$num2);


        echo "<pre>";
        print_r($res);
        echo "</pre>";
    ?>

    <?php 

        global $key;


        function idName($id, $name){
            
            return array_fill_keys($id, $name,);     
            return $name;
        }
        
        $id1 = [101,102,103,104,105];

        $name1 = ["Akshay", "Akash",'Chunya', "nandya"];
        
        $res = array_map("idName", $id1, $name1);

        $key = array_fill_keys($id1, array_map("idName", $name1));

        echo "<pre>";
        print_r($key);
        print_r($res);
        echo "</pre>";
    ?>

    <?php 
     
        $a = [1,2,3,4,5,6];
        
        $newArray = array_map('squre', $a);

        echo '<pre>';
        print_r($newArray);
        echo "</pre>";

    ?>

</body>
</html>