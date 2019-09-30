#!/bin/php
<?php
if ($argc != 1)
{
    function ft_split($s)
    {
        $arrsp = explode(" ", $s);
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
    $arr = array();
    $j = 1;
    while ($j < $argc)
    {
        echo count($argv)."\n";
        $arr = array_merge ($arr, ft_split($argv[$j]));
        $j++;
    }
    print_r($arr);
    $j = 0;
    sort($arr);
    while ($j < count($arr))
        echo $arr[$j++]."\n";
}
?>