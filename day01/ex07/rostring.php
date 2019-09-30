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
    $j = 1;
    $s = ft_split($argv[1]);
    while ($j < count($s))
        echo $s[$j++]." ";
    echo $s[0]."\n";
}
?>