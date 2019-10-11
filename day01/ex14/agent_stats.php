#!/usr/bin/php
<?php
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
    $s = array();
    while (TRUE)
    {
        $s[] = fgets(STDIN);
        if (feof(STDIN))
            break;
    }
    function gradenomouli($s, $argv)
    {
        $i = 0;
        $arr = array();
        while ($i < count($s))
        {
            if (strstr($s[$i], $argv))
                $arr[] = $s[$i];
            $i++;
        }
        $arr2 = array();
        $i = 0;
        $sum = 0;
        while ($i < count($arr))
        {
            if (preg_match("/($argv)\;\d+\;\w/", $arr[$i]))
            {
                $arr2 = ft_split($arr[$i], ";");
                if (is_numeric($arr[$i]))
                    $sum += $arr2[1];
            }
            $i++;
        }
        if ($sum != 0)
        {
            $sum /= $i;
        }
        return $sum;
    }
    function grade($s, $argv)
    {
        $i = 0;
        $arr = array();
        while ($i < count($s))
        {
            if (strstr($s[$i], $argv))
                $arr[] = $s[$i];
            $i++;
        }
        $arr2 = array();
        $i = 0;
        $sum = 0;
        while ($i < count($arr))
        {
            if (preg_match("/($argv)\;\d+\;\w/", $arr[$i]))
            {
                $arr2 = ft_split($arr[$i], ";");
                if (is_numeric($arr[$i]))
                    $sum += $arr2[1];
            }
            $i++;
        }
        $q = 0;
        while ($q < count($arr))
        {
            if (preg_match("/(bertrand_y)\;(\d+|)\;(moulinette)\;(\d+|)/", $arr[$q]))
            {

            }
            $q++;
        }
        if ($sum != 0)
            $sum /= $i;
        return $sum;
    }
    if (!strstr($argv[1], "_user"))
    {
        echo gradenomouli($s, $argv[1]);
    }elseif(strstr($argv[1], "_user"))
    {
        echo grade($s, $argv[1])
    }
?>