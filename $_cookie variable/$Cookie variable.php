<?php 
    $cookie_name = "user";
    $cookie_value = "Yavhoo Baba";

    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>1. Create cookies</h1>
    <h2>setcookie(name,value,expire,path,domain,secure, httponly)</h2>
    <p>name: set the name to cookies <br>
        vlaue: this value is store in user system its like a same as variable <br>
        expire: if you save the cookies in user system then you can set time and date for expire <br>
        path: when you want to retrive from page /some-path <br>
        domain: www.abc.com you can access the abc.com or other <br>
        secure: true/false if protocol use https is use then cookies set other wise if you use false then it will not check https or http <br>
        httponly: we can access the cookies form local and server if you want to access the from local then use true use JavaScript and <br>
        if set true only access the form server <br>
    </p>
    <h2>2. View cookie vlaue</h2>
    <p>
        $COOKIE[name]
    </p>

    <?php 
        if(!isset($_COOKIE[$cookie_name])){
            echo "cookie is not set";
        }
        else {
            echo $COOKIE[$cookie_name];
        }
         
    ?>
    
</body>
</html>