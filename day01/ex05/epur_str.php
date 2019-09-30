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
    foreach(ft_split($argv[1]) as $i)
        echo $i." ";
    echo "\n";
}
?>