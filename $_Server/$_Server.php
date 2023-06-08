<?php 

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo $_SERVER["SERVER_NAME"]. "<br>";
    echo $_SERVER["SERVER_PORT"]. "<br>";
    echo $_SERVER["PHP_SELF"]. "<br>";

?>