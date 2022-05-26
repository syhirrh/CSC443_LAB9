<?php

    session_start();
    echo "<html>";

    $myLogin = $_SESSION["myLogin"];
    echo "Value of myLogin has been retrived: ".$myLogin."\n";

    $myColor = $_SESSION["myColor"];
    echo "Value of myColor has been retrived: ".$myColor."\n";

    echo "</html>\n";

?>