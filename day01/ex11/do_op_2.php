#!/usr/bin/php
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
        return ($al);
    }
    $a = array();
    $calc = "";
    if (strlen(strstr($argv[1], "*")) > 0)
    {
        $a = ft_split($argv[1], "*");
        $calc = "*";
    }
    elseif (strlen(strstr($argv[1], "+")) > 0)
    {
        $a = ft_split($argv[1], "+");
        $calc = "+";
    }
    elseif (strlen(strstr($argv[1], "-")) > 0)
    {
        $a = ft_split($argv[1], "-");
        $calc = "-";
    }
    elseif (strlen(strstr($argv[1], "/")) > 0)
    {
        $a = ft_split($argv[1], "/");
        $calc = "/";
    }
    elseif (strlen(strstr($argv[1], "%")) > 0)
    {
        $a = ft_split($argv[1], "%");
        $calc = "%";
    }
    if (count($a))
    {
        $b = trim($a[0]);
        $c = trim($a[1]);
        if (is_numeric($b) && is_numeric($c))
        {
            if ($calc == "+")
                echo $b + $c;
            elseif ($calc == "-")
                echo $b - $c;
            elseif ($calc == "/")
                echo $b / $c;
            elseif ($calc == "%")
                echo $b % $c;
            elseif ($calc == "*")
                echo $b * $c;
        }else
            echo "Syntax Error";
    }else
        echo "Syntax Error";
    echo "\n";
}
else
    echo "Incorrect Parameters\n";
?>