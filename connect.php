<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbHost = $_ENV['DB_HOST'];
$dbPort = $_ENV['DB_PORT'];
$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName, $dbPort);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


return $conn;
