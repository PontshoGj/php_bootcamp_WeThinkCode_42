#!/bin/php
<?php
while (TRUE)
{
    echo "Enter a number:  ";
    $a = fgets(STDIN);
    $b = $a;
    if (strcmp($a, "^D") == 0)
    {
        echo "\n";
        exit();
    }
    if ((int)$a % 2 == 0)
    {    
        echo "The number " . $b . " is even\n";
    }
    elseif ((int)$a % 2 != 0)
        echo "The number" . $a . " is odd\n";
    elseif ((int)$a == 0)
        echo "The number 0 is even\n";
    else
        echo "'" . $a . "' is not a number\n";
}
?>