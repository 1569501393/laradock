<?php
// $mysqli = new mysqli("mysql", "testuser", "testpassword", "testdb");
$mysqli = new mysqli("mysql", "testuser", "testpassword", "testdb", '33060');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// sleep(60); // 模拟长时间查询

if ($mysqli->query("SELECT 1") === TRUE) {
    echo "Query succeeded";
} else {
    echo "Error: " . $mysqli->error;
}

$mysqli->close();
?>
