<?php
    session_start();
    
    if ($_SESSION['login'])
        echo $_SESSION['login']."\n";
    else
        echo "ERROR\n";
?>