<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color: gray;"> 
    <h2>SUPER GLOBAL VERIABLES

        <OL>
            <LI>$_GET</LI>
            <LI>$POST</LI>
            <li>$_Requrest</li>
            <li>$_SERVER</li>
            <li>$_SESSION</li>
             <li>$_COOKIE</li>
             <li>$_FILE</li>
        </OL>

    </h2>
    <hr>
    <h2>$_GET & $_POST</h2>

    <form action="Testform.php" method="post">
        <table>
            <tr> 
                <td>Name:</td>
                <td> <input type="text" name = "fname"><br></td> 
            </tr>
            <tr>

                <td>Email:</td>
                <td> <br><input type="text" name = "email"></td> 

            </tr>
            <tr>

                    <td>Gender:</td> 
                    <td><input type="radio" name='gender' value='male'>Male 
                    <input type="radio" name='gender' value='female'>Female</td>
                
                
                

            </tr>
            <tr>

                <td>Date of Birth:</td>
                <td> <br><input type="date" name = "date"></td> 

            </tr>
           
            <tr>

                <td>Age:</td>
                <td> <br><input type="text" name = "age"></td> 

            </tr>

            
            <tr>
                <td><br><input type="submit" name="save"></td>
            </tr>
        </table>
        
    </form>
    

</body>
</html>