<?php
// 设置较短的连接超时时间
ini_set('mysqli.connect_timeout', 5);

try {
    $mysqli = new mysqli("mysql", "user", "password", "mydb", '33060');

    if ($mysqli->connect_error) {
        throw new Exception("Connection failed: " . $mysqli->connect_error);
    }
    echo "Connected successfully";
} catch (Exception $e) {
    echo $e->getMessage();
}
