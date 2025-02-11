<?php
// PDO connection details
$host = 'localhost';
$dbname = 'simple_login';
$username = 'root';
$password = '';
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
