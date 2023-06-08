<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        *{
            
            margin: 0px;
            padding: 0px;
        }
        #header{
            width: 100%;
            height: 60px;
            background-color: bisque;
        }
        #navbar{
            width: 100%;
            height: 40px;
            background-color: aqua;
        }
        #main{
              display: flex;
              background-color: violet;
              height: 550px;
              width: 100;  
        }
        #content{
            height: 550px;
            background-color: burlywood;
            width: 80%;
        }
        #sidebar{
            height: 530px;
            width: 20%;
            background-color: rgb(159, 205, 131);
        }

        #footer{
            width: 100%;
            background-color: rgb(47, 212, 204); 
            height: 10vh;    
        }
        li{
            padding-left: 20px; 
            padding-top: 7px;
            font-weight: bold; 
            font-size: large;
        }
        a{
            text-decoration: none;
            color: inherit;
        }


    </style>
</head>

<body>
    
    <div class="main">
            <?php 
                include_once "header.php";
                
            ?>
            <?php include_once 'header.php'?>

           <?php include 'navbar.php'?>

            <div id="main">
                <div id="content">
                    HOME Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, consectetur aliquam deserunt laborum cum blanditiis minus quibusdam aperiam ducimus illum incidunt, aspernatur quis qui sit quaerat aut molestias, voluptatum voluptas.
                </div>
            
               <?php include "sidebar.php" ?>
            </div>

           <?php include "footer.php"?>

    </div>
</body>
</html>