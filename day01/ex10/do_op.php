#!/usr/bin/php
<?php
if($argc == 4)
{
    $a = trim($argv[1]);
    $b = trim($argv[3]);
    $calc = trim($argv[2]);

    if ($calc == "+")
        echo $a + $b;
    elseif ($calc == "-")
        echo $a - $b;
    elseif ($calc == "/")
        echo $a / $b;
    elseif ($calc == "%")
        echo $a % $b;
    elseif ($calc == "*")
        echo $a * $b;
    echo "\n";
}
else
    echo "Incorrect Parameters\n";

?>