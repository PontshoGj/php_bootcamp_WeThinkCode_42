<?php
    $array = array();
    foreach($_POST as $key => $value)
        $array[$key] = $value;
    $pass = "";
    $log =  "";
    if ($array["submit"] == "OK" && $array['login'] && $array['newpw'] && $array['oldpw'])
    {
        $accounts = unserialize(file_get_contents('./private/passwd'));
        for($i = 0; $i < count($accounts); $i++)
        {
            
            foreach ($accounts[$i] as $key => $value)
            {
                if ($key == 'login' && $value == $array['login'])
                    $log = $value;
                elseif ($key == 'passwd' && $value == hash('md5',$array['oldpw']))
                    $pass = $value;
            }
        }
        if ($log == $array['login'] && $pass == hash('md5', $array['oldpw']))
        {
            $account1[] = array("login" => $array['login'], "passwd" => hash('md5', $array['newpw']));
            if  (file_put_contents('./private/passwd',serialize($account1)))
                echo "OK\n";
            exit;
        }
        echo "ERROR\n";
    }else
        echo "ERROR\n";
?>