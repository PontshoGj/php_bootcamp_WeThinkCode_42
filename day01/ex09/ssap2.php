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
    function cmp($a, $b)
    {
        return strcmp(strtoupper($a), strtoupper($b));
    }
    $arr = array();
    $j = 1;
    while ($j < count($argv))
        $arr = array_merge ($arr, ft_split($argv[$j++]));
    $integer = array();
    $special = array();
    $ch = array();
    $j = 0;
    while ($j < count($arr))
    {
        if (is_numeric($arr[$j]))
            $integer[] = $arr[$j];
        elseif (preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]/", $arr[$j]))
            $special[] = $arr[$j];
        else
            $ch[] = $arr[$j];
        $j++;
    }
    $j = 0;
    usort($ch, cmp);
    rsort($integer);
    sort($special);
    while ($j < count($ch))
        echo $ch[$j++]."\n";
    $j = 0;
    while ($j < count($integer))
        echo $integer[$j++]."\n";
    $j = 0;
    while ($j < count($special))
        echo $special[$j++]."\n";
}
?>