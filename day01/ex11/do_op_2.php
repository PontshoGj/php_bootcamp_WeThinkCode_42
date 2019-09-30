#!/bin/php
<?php
if($argc == 2)
{
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
        sort($al);
        return ($al);
    }
    $a = array();
    if (strlen(strstr($argv[1], "*")) > 0)
    {
        $a = ft_split($argv[1], "*");
    }
    elseif (strlen(strstr($argv[1], "+")) > 0)
    {
        $a = ft_split($argv[1], "+");
    }
    elseif (strlen(strstr($argv[1], "-")) > 0)
    {
        $a = ft_split($argv[1], "-");
    }
    elseif (strlen(strstr($argv[1], "/")) > 0)
    {
            $a = ft_split($argv[1], "/");
    }
    elseif (strlen(strstr($argv[1], "%")) > 0)
    {
        $a = ft_split($argv[1], "%");
    }
    //echo $b;
    //$b = trim($argv[3]);
    //$calc = trim($argv[2]);

    /*if ($calc == "+")
        echo $a + $b;
    elseif ($calc == "-")
        echo $a - $b;
    elseif ($calc == "/")
        echo $a / $b;
    elseif ($calc == "%")
        echo $a % $b;
    elseif ($calc == "*")
        echo $a * $b;
    */echo "\n";
}
else
    echo "Incorrect Parameters\n";

?>