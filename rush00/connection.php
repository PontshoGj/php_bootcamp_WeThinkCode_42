<?php
    $servername = "localhost";
    $username = "root";
    $password = "123456";

    // function retconn()
    // {
    //     $conns = new PDO("mysql:host=$servername;dbname=onlinestore", $username, $password);
    //     return $conns;
    // }
    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE IF NOT EXISTS onlinestore";
        $conn->exec($sql);
        $conn = null;
        $conn = new PDO("mysql:host=$servername;dbname=onlinestore", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>