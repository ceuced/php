<?php
session_start();
require_once 'db.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $_POST['username']]);
    $user = $stmt->fetch();
    if ($user && $user['password'] === $_POST['password']) {
        $_SESSION['username'] = $user['username'];
        header('Location: secure.php');
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post">
        <label>
            <span>Username:</span>
            <input type="text" name="username" required>
        </label>
        <label>
            <span>Password:</span>
            <input type="password" name="password" required>
        </label>
        <button type="submit">Login</button>
    </form>
</body>
</html>