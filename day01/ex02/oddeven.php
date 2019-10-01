#!/bin/php
<?php
while (TRUE)
{
    echo "Enter a number:  ";
    $a = trim(fgets(STDIN));
    if (feof(STDIN))
    {
        echo "^D\n";
        exit();
    }
    if ((int)$a % 2 == 0 && is_numeric($a))
    {    
        echo "The number " . $a . " is even\n";
    }
    elseif ((int)$a % 2 != 0 && is_numeric($a))
        echo "The number " . $a . " is odd\n";
    elseif ((int)$a == 0 && is_numeric($a))
        echo "The number 0 is even\n";
    else
        echo "'" . $a . "' is not a number\n";
}
?>