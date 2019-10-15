<?php
    session_start();
    include("auth.php");
    $array = array();
    foreach($_POST as $key => $value)
        $array[$key] = $value;
    if (auth($array['login'], $array['passwd']))
    {
        $_SESSION["login"] = $array["login"];
        $_SESSION["passwd"] = $array['passwd'];
    }else
        header('location: ./index.html')
?>
<html><body>
<iframe name="chat" src="chat.php" width="100%"></iframe>
<iframe name="speak" src="speak.php" width="100%"></iframe>
</body></html>
