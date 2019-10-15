<?php
    session_start();

    if ($_SESSION['login'])
    {
        $array = array();
        $a = $_SESSION['login'];
        foreach($_POST as $key => $value)
            $array[$key] = $value;
        if (!file_exists('../private/chat'))
        {
            $user = array("login" => $_SESSION['login'], "time" => date("h:i"), "msg" => $array["msg"]);
            $account = array($user);
            file_put_contents('../private/chat', serialize($account));
        }else
        {
            $file = fopen('../private/chat', "a+");
            if  (flock($file,LOCK_EX))
            {
                $accounts = unserialize(file_get_contents('../private/chat'));
                $accounts[] = array("login" => $a, "time" => date("h:i"), "msg" => $array["msg"]);
                if  (file_put_contents('../private/chat', serialize($accounts)))
                    flock("../private/chat", LOCK_UN);
            }
            fclose($file);
        }
    }else
        echo "ERROR\n";
?>