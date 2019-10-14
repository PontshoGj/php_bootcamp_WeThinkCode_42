<?php
    session_start();
    include("auth.php");
    $array = array();
    foreach($_GET as $key => $value)
        $array[$key] = $value;
    if (auth($array['login'], $array['passwd']))
    {
        $_SESSION["login"] = $array["login"];
        $_SESSION["passwd"] = $array['passwd'];
        echo "OK\n";
    }else
        echo "ERROR\n";
?>