<?php 
require_once 'connection.php';
$stmt = $pdo->query('SELECT cars.*, fuel FROM cars LEFT JOIN fuels ON cars.fuel_id = fuels.id');
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
    <a href="create.php">Add Car</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Price</th>
                <th>Fuel</th>
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
                    <td><?php echo $car['fuel'] ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $car['id'] ?>">View</a>
                        <a href="update.php?id=<?php echo $car['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $car['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>