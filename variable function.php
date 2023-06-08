<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>First way to define a variable reference in php</h2>
        <?php

                 function sayHello($name){
                    echo "Hello $name";
                    
                }

                $func = "sayHello"; //sayhello is the function name to value as variable of $func
                
                $func( "Man!!" );

        ?>
        <h2>second way to define a variable reference in php</h2>
        <?php

                $func = function($name){
                    echo "Hello $name";
                    
                };

                $func("sayHello"); //sayhello is the function name to value as variable of $func
                
                

        ?>

        <?php
            // class Foo 
            // {
            //     function Variable()
            //     {
            //         $name = "Bar";
            //         $this -> $name();
            //     }

            //     function Bar()
            //     {
            //         echo "This is Bar";
            //     }

            // }

            // $func = new Foo();
            // $var = "Variable";
            // $func->$var;
            function Variable()
                {
                    $name = "Bar";
                     $name();
                }

                function Bar()
                {
                    echo "<br>This is Bar";
                }

                $func = "Variable";
                $func();
        ?>

</body>
</html>