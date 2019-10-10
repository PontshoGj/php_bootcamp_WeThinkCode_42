#!/usr/bin/php
<?php
if ($argc != 1)
{
    $j = 1;
    foreach($argv as $i)
    {
        if ($j++ != 1)
            echo $i."\n";
    }
}
?>