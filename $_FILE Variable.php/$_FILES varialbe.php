<?php 
    if(isset($_FILES['file'])){

        echo "<pre>";
        print_r($_FILES);
        echo "<pre>";

         echo $file_name =  $_FILES['file']['name']."<br>";  
         echo  $file_type = $_FILES['file']['type']."<br>";
         echo  $file_tmp = $_FILES['file']["tmp_name"]."<br>";
         echo  $file_size = $_FILES['file']["size"]."<br>";

         $uploaddir = '/htdocs/php/uploaded-image';
         $uploadfile = $uploaddir . basename($_FILES['file']['name']);
       
       if( move_uploaded_file($file_tmp, $uploadfile)){
            echo "<br> Successfully uploaded.";
       }
       else{
        echo "<br> Could not upload the file.";
       }

    }
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
    <form action="" method = "post" enctype="multipart/form-data">
    Name<input type="text"><br><br>
    AGE <input type="number" name="age" id=""><br> <br>
    Resume <input type="file" name="file"> <br> <br>

    <input type="submit" name="submit">

    </form>

</body>
</html>