#!/usr/bin/php
<?php
    if ($argc < 2)
        exit;
    $a = file_get_contents($argv[1]);
    $q = preg_split("/\n/", $a);
    $i = 0;
    while ($i < count($q))
    {
        if(strstr($q[$i],"<title>"))
        {
            echo "<title>";
            echo strtoupper(substr(strstr($q[$i], "<title>"), 7, strlen(strstr($q[$i], "<title>")) - 15));
            echo "</tile>\n";
        }else
            echo $q[$i]."\n";
        $i++;
    }
?>