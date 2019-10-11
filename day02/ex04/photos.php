#!/usr/bin/php
<?php
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
    $dir = file_get_contents($argv[1]);
    $q = preg_split("/\n/", $dir);
    $file = substr(strstr($argv[1], "https://"), 8, strlen($argv[1]));
    $harry = array();
    while ($i < count($q))
    {
        if(strstr($q[$i],"<img"))
            $harry[] = ft_split(strstr($q[$i],"<img"), " "); 
        $i++;
    }
    $hname = array();
    for($j = 0; $j < count($harry); $j++)
    {
        for($x = 0; $x < count($harry[$j]); $x++)
        {
            if (strstr($harry[$j][$x], "src"))
                $hname[] = substr($harry[$j][$x], 5, strlen($harry[$j][$x]));
        }
    }
    $ss = array();
    for($j = 0; $j < count($hname); $j++)
        $ss[] = ft_split($hname[$j],"\"");
    //print_r($ss);
    $sname = array();
    for($j = 0; $j < count($ss); $j++)
    {
        for($i = 0; $i < count($ss[$j]); $i++)
        {
            if (strstr($ss[$j][$i], "htt"))
                $sname[] = $ss[$j][$i];
            elseif(strstr($ss[$j][$i], "."))
                $sname[] = $ss[$j][$i];
        }   
    }
    $bname = array();
    for($j = 0; $j < count($sname); $j++)
        $bname[] = ft_split($sname[$j],"/");
    //print_r($sname);
    $cwd = array();
    for($j = 0; $j < count($sname); $j++)
        $cwd[] = getcwd()."/".$file."/".$bname[$j][count($bname[$j]) - 1];
    //print_r($cwd);
    $g = "mkdir ".$file;
    $s = shell_exec($g);
    $ch = curl_init();
    for($j = 0; $j < count($sname); $j++)
    {
        curl_setopt($ch, CURLOPT_URL, $sname[$j]);
        $fp = fopen($cwd[$j], 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $dat = curl_exec($ch);
        fclose($fp);
    }
    curl_close($ch);
?>