<?php
    session_start();
?>
<html><body>
<form>
    Usename:<input type="text" name ="login" value="<?php echo $_SESSION["login"]; ?>"/>
    <br />
    Password: <input type="text" name="passwd" value="<?php echo $_SESSION["passwd"]; ?>"/>
    <input type="submit" name="submit" value="OK">
    <?php
        $array = array();
        foreach($_GET as $key => $value)
            $array[$key] = $value;
        if ($array['login'] && $array['passwd'])
        {
            $_SESSION["login"] = $array["login"];
            $_SESSION["passwd"] = $array['passwd'];
        }
    ?>
</form>
</body></html>
