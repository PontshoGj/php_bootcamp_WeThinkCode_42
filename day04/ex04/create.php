<?php
    $array = array();
    foreach($_POST as $key => $value)
        $array[$key] = $value;
    if ($array["submit"] == "OK" && $array['login'] && $array['passwd'])
    {
        if (!file_exists('../private/passwd'))
        {
            mkdir('../private');
            $user = array("login" => $array['login'], "passwd" => hash('md5', $array['passwd']));
            $account = array($user);
            if  (file_put_contents('../private/passwd',serialize($account)))
            {
                echo "OK\n";
                header('location: ./index.html');
            }
        }else
        {
            $accounts = unserialize(file_get_contents('./private/passwd'));
            for($i = 0; $i < count($accounts); $i++)
            {
                foreach ($accounts[$i] as $key => $value)
                {
                    if ($key = $array['login'])
                    {
                        echo "ERROR\n";
                        exit;
                    }
                }
            }
            $accounts[] = array("login" => $array['login'], "passwd" => hash('md5', $array['passwd']));
            if  (file_put_contents('../private/passwd', serialize($accounts)))
            { 
                echo "OK\n";
                header('location: ./index.html');
            }
        }
    }
?>