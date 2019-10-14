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
            $user = array("login" => $_SESSION['login'], "time" => time(), "msg" => $array["msg"]);
            $account = array($user);
            file_put_contents('../private/chat', serialize($account));
        }else
        {
            if  (flock('../private/chat',LOCK_EX))
            {
                $accounts = unserialize(file_get_contents('./private/chat'));
                $accounts[] = array("login" => $a, "time" => time(), "msg" => $array["msg"]);
                if  (file_put_contents('../private/chat', serialize($accounts)))
                    flock("../private/chat", LOCK_UN);
            }
        }
    }else
        echo "ERROR\n";
?>