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
    function sec($s)
    {
        if (!preg_match('/[[\d]{1,2}[1-24]\:[\d]{1,2}[1-59]\:[\d]{1,2}[1-59]/', $s))
        {
            echo "Wrong Format\n";
            exit;
        }
    }
    if ($argc < 2)
        exit;
    //checking if the input is the correct format before proc
    if (!preg_match('/[A-Z][a-z]{1,7}\s[\d]{1,2}\s[A-Z][a-z]{1,9}\s[\d]{4}\s[[\d]{1,2}\:[\d]{1,2}\:[\d]{1,2}/', $argv[1]))
    {
        echo "Wrong Format\n";
        exit;
    }
    $days = array( "Dimanche" => "Sunday", "Lundi" => "Monday", "Mardi" => "Tuesday", "Mercredi" => "Wednesday", "Jeudi" => "Thursday", "Vendredi" => "Friday", "Samedi" => "Saturday");
    $months = array("janvier" => "January", "Février" => "February", "Mars" => "March", "Avril" => "April", "Mai" => "May", "Juin" => "June", "Juillet" => "July", "Août" => "August", "Septembre" => "September", "Octobre" => "October", "Novembre" => "November", "Décembre" => "December");
    $datesplit = ft_split($argv[1], " ");
    //checking if the day is correct
    if (!$days[$datesplit[0]])
    {
        echo "Wrong Format\n";
        exit;
    }elseif (!$months[$datesplit[2]]) //checking if the month is correct
    {
        echo "Wrong Format\n";
        exit;
    }elseif (!($datesplit[1] > 0 && $datesplit[1] < 32)) //checking if the day in number is between 1 and 31!
    {
        echo "Wrong Format\n";
        exit;
    }
    //create seconds to add weekday, day, month, year, time, and timezone
    sec($datesplit[4]); // checking if the time is correct h:m:s
    $secsum = strtotime($days[$datesplit[0]].", ".$datesplit[1]." ".$months[$datesplit[2]]." ".$datesplit[3]." ".$datesplit[4]."+1");
    echo $secsum."\n";
?>