<?php

    session_start();
    $_SESSION = array();

    ig(isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-42000, '/');
    }

    session_destroy();

    echo "<html>";
    echo "Thank you for visiting FYICenter.com.<br>";
    echo " <a href=login.php>Login Again.</a><br>";
    echo "</html><br>";

?>