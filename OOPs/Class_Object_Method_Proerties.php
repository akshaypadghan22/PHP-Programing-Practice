<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        /*what is oop?
        It is a codding pattern
        1 procedural 
        2 Object orientend 
            Its more populer 
            its moduler and reusable
            its use diffrent project 
            its used in large project

        How to work oop
         1 class
         2 Object
         
         1. class: 
            ex house blue print and after its crate house is object
        
            ex. class car => method: color engine seat Ac Price 
            but in real car is object  

2objectonly this things are present those class are define in class 

            Class => calculation
            Properties => $a,$b,$c 
            Methods => sum(){
                                $c = $a+$b;
                                return $c
                            }
                         sub(){
                            $c = $a-$b;
                            return $c;
                         }   
            How to define class & object

            class calculation{
                
                public $a, $b, $c;

                function sum(){ //fucntion declaration(method declaration)
                    $this->c = $this->a + $this->b;
                    return $this->c;
                }
                
                function sub(){ //fucntion declaration(method declaration)
                    $this->c = $this->a - $this->b;
                    return $this->c;
                }

            }
                $c1 = new claculation();
                $c1->a = 10; //set value a as 10
                $c1->b = 10; //set value a as 10

                echo $c1->sum(); //30


        */
            class Calculation{
                public $a, $b, $c;
                function sum(){
                    $this->c = $this->a+$this->b;
                    return $this->c;
                }
                function sub(){
                    $this->c = $this->a+$this->b;
                    return $this->c;
                }
            }

            $c1 = new Calculation();
            $c1->a = 20;
            $c1->b = 20;
            echo $c1->sum();
    ?>
</body>     
</html>