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
        $a1 = ['a' => 'red', 'b'=>'blue', 'g' =>'green'];
        $a2 = ['e' => 'red', 'b' => 'blue', 'p'=> 'purple'];
        $a3 = ['a' => 'red', 'b' => 'GRAY', 'S'=>'Silver'];

        $res = array_diff($a1,$a2,$a3);

        echo "<pre>";
        print_r($res);
        echo "</pre>";

        $res2 = array_diff_key($a1,$a2,$a3);

        echo "<pre>";
        print_r($res2);
        echo "</pre>";
  
 
        $res3 = array_diff_assoc($a1,$a2,$a3);

        echo "<pre>";
        print_r($res3);
        echo "</pre>"; 

        function compare($a,$b){
            if($a == $b){
                return 0;
            }
            return($a > $b) ? 1 : -1;
        }

        $res3 = array_diff_uassoc($a1,$a2,$a3, "compare"); //user define function

        echo "<pre>";
        print_r($res3);
        echo "</pre>"; 

        //same as uassoc following function udiff_assoc fucntion

        $res4 = array_udiff_assoc($a1,$a2,$a3,"compare");

        echo "<pre>";
        print_r($res4);
        echo "</pre>"; 

        // user define key function

        $res5 = array_diff_ukey($a1,$a2,$a3,"compare");

        echo "<pre>";
        print_r($res5);
        echo "</pre>"; 

        // user define function compare only values of array

        $res6 = array_udiff($a1,$a2,$a3, 'compare');

        echo "<pre>";
        print_r($res);
        echo "</pre>"; 

        //user define function compare the key with value then use ukey and uassoc but you have two function for key and asssoc
        
        function compareValues($a,$b){
            if($a == $b){
                return 0;
            }
            return($a > $b) ? 1 : -1;
        } 

        $res7 = array_udiff_uassoc($a1,$a2,$a3,"compare",'compareValues');

        echo "<pre>";
        print_r($res7);
        echo "</pre>";
       
        
        
    ?>
</body>
</html>