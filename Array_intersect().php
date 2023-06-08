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
        $a1 = ['t' => 'red', 'b' => 'green','c' => 'blue', 'd'=>'yello'];
        $a2 = ['e' => 'red', 'f' => 'green', 'g'=> 'blue'];

        $res = array_intersect($a1,$a2);

        echo "<pre>";
        print_r($res);
        echo "</pre>";
        
        $res2 = array_intersect_assoc($a1,$a2);

        echo "<pre>";
        print_r($res2);
        echo "</pre>";
  
    ?>
</body>
</html>