<?php
session_start();
$_SESSION['username'] = 'admin'; // Set session value

// $_SESSION['displayname'] = 'Jane Doe';
// unset($_SESSION['username']); // Unset session value (remove)

echo 'Session Created';