<?php
function ft_is_sort($i)
{
    $j = 0;
    $f = 1;
    while($f < count($i))
    {
        if (strcmp($i[$j], $i[$f]) != 0)
            return 0;
        $j++;
        $f++;
    }
    return 1;
}
?>