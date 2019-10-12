#!/usr/bin/php
<?php
    if ($argc < 2)
        exit;
    $a = file_get_contents($argv[1]);
    $q = preg_split("/\n/", $a);
    $i = 0;
    while ($i < count($q))
    {
        if(preg_match('/title=".*"/', $q[$i]))
        {
            $s = preg_split('/"/', $q[$i]);
            echo $s[0]."\"".strtoupper($s[1])."\"".$s[2]."\n";
        }
        else
            echo $q[$i]."\n";
        $i++;
    }
?>