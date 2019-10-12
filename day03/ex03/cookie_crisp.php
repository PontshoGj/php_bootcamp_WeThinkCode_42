<?php
    $a = array();
    foreach($_GET as $key => $value)
        $a[$key] = $value;
    if ($a["action"] == "set")
        setcookie($a["name"], $a["value"], time() + (86400 * 30), "/");
    elseif($a["action"] == "get")
        if ($_COOKIE[$a["name"]])
            echo $_COOKIE[$a["name"]]."\n";
    elseif($a["action"] == "del")
        setcookie($a["name"], "", time() - 3600);
?>