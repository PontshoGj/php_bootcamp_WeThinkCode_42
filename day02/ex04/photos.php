#!/usr/bin/php
<?php
    $dir = file_get_contents($argv[1]);
    $q = preg_split("/\n/", $dir);
    $file = substr(strstr($argv[1], "https://"), 8, strlen($argv[1]));
    $g = "mkdir ".$file;
    $s = shell_exec($g);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $argv[1]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $dat = curl_exec($ch);
    curl_close($ch);
    file_put_contents("home_big.jpg", $dat);
?>