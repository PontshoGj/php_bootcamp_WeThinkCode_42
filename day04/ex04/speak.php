<?php
    session_start();

    if ($_SESSION['login'])
    {
        $array = array();
        foreach($_POST as $key => $value)
            $array[$key] = $value;
        if (!file_exists('./private/chat'))
        {
            mkdir('../private');
            $user = array("login" => $array['login'], "time" => time(), "msg" => $array["msg"]);
            $account = array($user);
            if  (flock('../private/chat',LOCK_EX))
            {
                if  (file_put_contents('../private/chat', serialize($account)))
                    flock("../private/chat", LOCK_UN);
            }
        }else
        {
            if  (flock('../private/chat',LOCK_EX))
            {
                $accounts = unserialize(file_get_contents('./private/chat'));
                $accounts[] = array("login" => $array['login'], "time" => time(), "msg" => $array["msg"]);
                if  (file_put_contents('../private/chat', serialize($accounts)))
                    flock("../private/chat", LOCK_UN);
            }
        }
    }
?>