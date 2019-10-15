<?php
    session_start();
?>
<html><body>
    <?php
         if ($_SESSION['login'])
         {
             $arry = array();
             $arry2 = array();
            $accounts = unserialize(file_get_contents('../private/chat'));
            for($i = 0; $i < count($accounts); $i++)
            {
                foreach ($accounts[$i] as $key => $value)
                    $arry[$key] = $value;
                $arry2[] = $arry; 
            }
            $i = 0;
            while ($i < count($arry2))
            {
                echo  "[".$arry2[$i]['time']."] "."<b>".$arry2[$i]['login']."</b>: ".$arry2[$i]['msg']."<br />\n";
                $i++;
            }
         }
    ?>
</body></html>