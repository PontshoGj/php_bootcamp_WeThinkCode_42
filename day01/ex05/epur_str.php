#!/bin/php
<?php
if ($argc != 1)
{
    function ft_split($s)
    {
        $arrsp = preg_split("/[\s]/", $s);
        $arrsp = array_filter($arrsp);
        return ($arrsp);
    }
    $j = 0;
    $s = ft_split($argv[1]);
    while ($j < count($s))
    {
        echo $s[$j++];
        if ($j < count($s))
            echo " ";
    }
    echo "\n";
}
?>