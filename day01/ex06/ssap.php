#!/bin/php
<?php
if ($argc != 1)
{
    function ft_split($s)
    {
        $arrsp = preg_split("/[\s,]+/", $s);
        $arrsp = array_filter($arrsp);
        sort($arrsp);
        return ($arrsp);
    }
    $arr = array();
    $j = 1;
    while ($j < $argc)
        $arr = array_merge ($arr, ft_split($argv[$j++]));
    $j = 0;
    sort($arr);
    while ($j < count($arr))
        echo $arr[$j++]."\n";
}
?>