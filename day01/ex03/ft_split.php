#!/bin/php
<?php

function ft_split($s)
{
    $arrsp = preg_split("/[\s,]+/", $s);
    $arrsp = array_filter($arrsp);
    sort($arrsp);
    return ($arrsp);
}
?>