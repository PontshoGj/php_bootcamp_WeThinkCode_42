#!/usr/bin/php
<?php

if ($argc > 1)
{
function ft_split($s)
{
    $arrsp = explode(" ", $s);
    $i = 0;
    $al = array();
    while ($i < count($arrsp))
    {
        if (($arrsp[$i] != "") && strlen(strstr($arrsp[$i], "\t")) == 0)
            $al[] = $arrsp[$i];
        if (strstr($arrsp[$i], "\t"))
            $al[] = $arrsp[$i];
        $i++;
    }
    return ($al);
}
$s = ft_split($argv[1]);
$j = 0;
while ($j < count($s))
{
    echo trim($s[$j++]);
    if ($j != count($s))
        echo " ";
}
echo "\n";
}
?>