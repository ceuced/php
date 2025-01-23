<?php
require_once 'connection.php';
$stmt = $pdo->prepare('SELECT * FROM cars WHERE id = :id');
$stmt->execute(['id' => $_GET['id']]);
$car = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul class="breadcrumbs">
        <li><a href="index.php">Home</a></li>
        <li><?php echo $car['id'] ?? 'N/A' ?></li>
    </ul>
    <?php if ($car): ?>
        <h1>Car ID: <?php echo $car['id'] ?></h1>
        <dl>
            <dt>Make</dt>
            <dd><?php echo $car['make'] ?></dd>
            <dt>Model</dt>
            <dd><?php echo $car['model'] ?></dd>
            <dt>Year</dt>
            <dd><?php echo $car['year'] ?></dd>
            <dt>Price</dt>
            <dd><?php echo $car['price'] ?></dd>
        </dl>
    <?php else: ?>
        <h1>Car not found</h1>
    <?php endif; ?>
</body>
</html>