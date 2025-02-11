<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Page</title>
</head>
<body>
    <?php if (isset($_SESSION['username'])): ?>
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>This is a secure page.</p>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <p>You are not logged in. Please <a href="login.php">login</a>.</p>
    <?php endif; ?>
</body>
</html>