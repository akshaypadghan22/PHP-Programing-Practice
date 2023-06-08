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
        
        echo strcmp("Hello word!","Hello word!"); //retrun 0 means match the string
        echo "<br>";
        echo strcmp("Hello, word!","Hello"); // retrun any positive value it means left string is greter than right stirng
        echo "<br>";
        echo strcmp("Hello word!","Hello word! Hello"); // return negative value it means left value is smaller than right stirng
        echo "<br>";
        echo strncmp("Hello word!","Hello word! Hello",6); // retrun 0 means first 6 character to be checked it match or not if match then return 0
        echo "<br>";
        echo strcasecmp("Hello word!", "hello word!"); // return 0 means if first string same as second string but not case sensitve then it will use strcasecmp() it retrun 0
        echo "<br>";
        echo strncasecmp("Hello word!","hello word! hello",6); //strncasecmp(first string, second string, number) retrun 0 if first character 5 is match then it return 0 
        echo "<br>";
        echo strnatcmp("2Hello word!","10Hello word!");
        echo strnatcmp("2Hello word!","2Hello word!");
        echo "<br>";
        echo substr_compare("Hello word!","word",6,1); // substr_compare(string1, string2, matchin number(6), how character compare(2)like 'wo')
        echo "<br>";
        echo similar_text("Hello word!","ord"); //similar text(string1, string2) how many text match with 1st string with 2nd string
        echo "<br>";
        echo similar_text("Hello word!", "Hello wo",$per); //similar text(string1, string2) how many text match with 1st string with 2nd string with return percentage 
        echo "<br>";
        echo  "Percentage: ".$per;  // print percentage of how many similer word of first stirn with second string


    ?>
 
 .

</body>
</html>