<?php
// index.php

$servername = "mysql";
$username = "hello_user";
$password = "hello";
$dbname = "hello_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully" . PHP_EOL;
}

$redis = new Redis();
$redis->connect('redis');
$redis->set('test', 'Hello, World!');
echo $redis->get('test') . PHP_EOL;

echo "Hello, World!";

$conn->close();