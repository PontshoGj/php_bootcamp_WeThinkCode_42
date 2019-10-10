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
    $i = 0;
    $arr = array();
    while ($i < count($s))
    {
        if (strstr($s[$i], $argv[1]))
            $arr[] = $s[$i];
        $i++;
    }
    $i = 0;
    $sum = 0;
    while ($i < count($arr))
    {
        $arr = ft_split($arr[$i++], ";");
        $sum += $arr[1];
    }
    echo $sum/$i;
?>