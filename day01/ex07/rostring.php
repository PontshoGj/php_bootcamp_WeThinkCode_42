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
    $j = 1;
    $s = ft_split($argv[1]);
    while ($j < count($s))
        echo $s[$j++]." ";
    echo $s[0]."\n";
}
?>