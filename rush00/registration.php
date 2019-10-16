<?php
    include("createuser.php");
    $array = array();
    foreach($_POST as $key => $value)
        $array[$key] = $value;

    if ($array['name'] && $array['surname'] && $array['id'] && $array['number'])
    {
        adduser($array['name'], $array['name'], $array['surname'], $array['number'], $array['address'], $array['id']);
        echo "User created\n";
    }
?>