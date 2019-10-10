#!/usr/bin/php
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