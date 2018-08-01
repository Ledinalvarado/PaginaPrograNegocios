<?php
$pdo = new PDO("mysql:dbname=cinesemely;host=127.0.0.1",
    "root",
    "w1234567890d",
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);