<?php
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
    sort($al);
    return ($al);
}
?>