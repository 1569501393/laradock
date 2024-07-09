<?php
$mysqli = new mysqli("mysql", "user", "password", "mydb");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully. Waiting for timeout...\n";

// 等待超过空闲超时时间
sleep(10);

// 尝试再次查询
$result = $mysqli->query("SELECT 1");

if (! $result) {
    echo "Query failed: " . $mysqli->error;
} else {
    echo "Query succeeded.";
}

$mysqli->close();
