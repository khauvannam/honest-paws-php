<?php

$host = '127.0.0.1'; // or 'localhost'
$dbname = 'your_database_name';
$username = 'your_database_user';
$password = 'your_database_password';

function conn(): PDO
{
    global $host, $dbname, $username, $password;
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=3306", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
