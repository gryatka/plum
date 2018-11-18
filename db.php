<?php
    $dbhost   = "localhost";
    $dbname   = "maket1";
    $username = "root";
    $password = "";
    try {
        $pdo = new PDO ("mysql:host=$dbhost; dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOexepton $e) {
        echo "Невозможно подключиться к базе данных " . $e->getMessege;
        exit();
    }