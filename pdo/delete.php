<?php
require_once 'connection.php';
$stmt = $pdo->prepare('SELECT * FROM cars WHERE id = :id');
$stmt->execute(['id' => $_GET['id']]);
$car = $stmt->fetch();
if (count($_POST) > 0) {
    if ($_POST['confirm'] == 'Yes') {
        $stmt = $pdo->prepare('DELETE FROM cars WHERE id = :id');
        $stmt->execute(['id' => $_GET['id']]);
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Car ID: <?php echo $car['id'] ?></h1>
    <p>
        Are your sure you want to delete
        <?php echo $car['make'] ?>
        <?php echo $car['model'] ?>
        <?php echo $car['year'] ?>?
        <form method="post">
            <input type="submit" name="confirm" value="Yes" />
            <input type="submit" name="confirm" value="No" />
        </form>
    </p>
</body>
</html>