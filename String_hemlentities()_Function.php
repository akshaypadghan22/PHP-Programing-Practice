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
        $str = "A 'quote' is <b>bold</b> ";
        $str2 = '<a href="https://www.freejobalert.com/maharashtra-government-jobs/">Job portal</a>';
        
        echo $str."<br><br>";
        echo $str2."<br><br>";

        // echo htmlentities($str);
        // echo htmlentities($str2);

        echo htmlentities($str2, ENT_QUOTES); //htmlentites($str2, ENT_QUOTES) // all html entity with single and double quats to encode
        echo "<br>";

        echo htmlentities($str2, ENT_NOQUOTES); //htmlentites($str2, ENT_QUOTES) // only all special character amd single and double quats not encode
        echo "<br>";

        htmlspecialchars($str,ENT_NOQUOTES); //echo htmlspecialchars($str2, ENT_NOQUOTES); //htmlentites($str2, ENT_NOQUOTES) // all special character with single and double quats not encode
        echo "<br>";

        htmlspecialchars($str,ENT_NOQUOTES); //echo htmlspecialchars($str2, ENT_QUOTES); //htmlentites($str2, ENT_QUOTES) // all special character with single and double quats encode
        echo "<br>";

        echo "<hr>";

        $htmlent = htmlentities($str2, ENT_QUOTES); //htmlentites($str2, ENT_QUOTES) // all html entity with single and double quats to encode

        echo html_entity_decode($htmlent);
        echo "<br>";

        $htmlspecialchars = htmlspecialchars($str2,ENT_NOQUOTES); //echo htmlspecialchars($str2, ENT_NOQUOTES); //htmlentites($str2, ENT_NOQUOTES) // all special character with single and double quats not encode

        echo htmlspecialchars_decode($htmlspecialchars);
        echo "<br>";

        echo "<hr>";

        echo "<pre>";
        print_r( get_html_translation_table());  // return list of special character in array format and encode
        echo "</pre>";

        echo "<hr>";

        echo "<pre>";
        print_r( get_html_translation_table(HTML_ENTITIES)); // return list of html entities in array format and encode
        echo "</pre>";









    ?>
</body>
</html>