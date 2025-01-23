<?php
$dsn = 'mysql:host=localhost;dbname=automotive';
$user = 'root';
$pass = '';
$options = [];
$pdo = new PDO($dsn, $user, $pass, $options);

// Note that there is no closing PHP tag.
// This is because we don't want to output anything to the browser.
// We only want to set up the connection to the database.
// This file was meant to be imported.