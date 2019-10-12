#!/usr/bin/php
<?php
    if ($argc < 2)
        exit;
    $a = file_get_contents($argv[1]);
    $q = preg_split("/\n/", $a);
    $i = 0;
    while ($i < count($q))
    {
        if(strstr($q[$i],"title="))
        {
            echo strstr($q[$i],"title=");
        }elseif (strstr($q[$i], "<a"))
        {
            echo strstr($q[$i], "<a");
        }
        else
            echo $q[$i]."\n";
        $i++;
    }
?>