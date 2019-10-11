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
    function gettty($s)
    {
        $i =  posix_ttyname ($s);
        $d = ft_split($i, "/");
        return $d[1];
    }
    $s = shell_exec('w');
    $a = ft_split($s, "\n");
    $i = 2;
    $q = array();
    while ($i < count($a))
        $q[] = ft_split($a[$i++], " ");
    $i = 0;
    date_default_timezone_set("Africa/Johannesburg");
    while ($i < count($q))
    {
        if (strcmp($q[$i][1], "console") == 0)
            echo $q[$i][0]. " ".$q[$i][1]."  ".date("M d")." ".$q[$i][3]."\n";
        else
            echo $q[$i][0]. " ".gettty($q[$i][1])."  ".date("M d")." ".$q[$i][3]."\n";
        $i++;
    }
?>