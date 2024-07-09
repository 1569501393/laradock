<?php
$mysqli = new mysqli("mysql", "user", "password", "mydb");

// 设置较短的查询超时时间
$mysqli->options(MYSQLI_OPT_READ_TIMEOUT, 5);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// 模拟一个长时间运行的查询
$result = $mysqli->query("SELECT SLEEP(10)");

if (! $result) {
    echo "Query failed: " . $mysqli->error;
} else {
    echo "Query succeeded.";
}

$mysqli->close();
