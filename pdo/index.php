<?php 
require_once 'connection.php';
$stmt = $pdo->query('SELECT * FROM cars');
$cars = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>List of Available Cars</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cars as $car): ?>
                <tr>
                    <td><?php echo $car['id'] ?></td>
                    <td><?php echo $car['make'] ?></td>
                    <td><?php echo $car['model'] ?></td>
                    <td><?php echo $car['year'] ?></td>
                    <td><?php echo $car['price'] ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $car['id'] ?>">view</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>