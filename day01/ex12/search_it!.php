#!/bin/php
<?php
if ($argc > 2)
{
    function ft_split($s, $c)
    {
        $arrsp = explode($c, $s);
        $i = 0;
        $al = array();
        while ($i < count($arrsp))
        {
            if (($arrsp[$i] != ""))
                $al[] = $arrsp[$i];
            $i++;
        }
        return ($al);
    }
    $a = 2;
    $b = "";
    while ($a < count($argv))
    {
        if (strstr($argv[$a], $argv[1]))
            $b = $argv[$a];
        $a++;
    }
    if (strlen($b))
    {
        $c = ft_split($b, ":");
        echo $c[1]."\n";
    }
}
?>