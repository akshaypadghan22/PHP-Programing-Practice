<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <h3>Array_value & Array_chunk</h3>
        
        <?PHP 
            $emp = [
                        [
                            'id' => 101,
                            'ename' => "David",
                            'city' => "Mumbai"
                        ],
                        [
                            'id' => 102,
                            'ename' => "Marchant",
                            'city' => "USA"
                        ],
                        [
                            'id' => 103,
                            'ename' => "Chappi",
                            'city' => "HongKong"
                        ],

                     ];

            $res = array_column($emp,'city','id');
            
            echo "<pre>";
            print_r($res);
            echo "</pre>";
        ?>
        <hr>
        <?php 
            $empname = ["rohit", 'waman','pranit','swapnil','chandan','nilesh'];

            $res = array_chunk($empname, 4);
        
            echo "<pre>";
            print_r($res);
            echo "</pre>";

        ?>
</body>
</html>