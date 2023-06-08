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
        $conn  = mysqli_connect("localhost", "root", "", "student") or die("Connection Failed");

        $sql = "SELECT * FROM student"; 

        $result = mysqli_query($conn, $sql) or die("Query Failed");

        $row = mysqli_fetch_assoc($result); // Associative array fetch, only one result fetch form db only one row 

        echo "<pre>";
        print_r($row);
        echo "<pre>";

        // echo $row['name']." ".$row['city']; // first row of name and city fetch

        while($row = mysqli_fetch_assoc($result) ){ //Show all record from db 

            echo $row['name']." ".$row['city']."<br>"; // first row of name and city fetch
        
        }

        $row1 = mysqli_fetch_row($result);

        echo "<pre>";
        print_r($row1);
        echo "<pre>";

        
    ?>
</body>
</html>