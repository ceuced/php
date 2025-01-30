<?php
require_once 'connection.php';
$fuels = $pdo->query('SELECT * FROM fuels')->fetchAll();
$stmt = $pdo->prepare('SELECT * FROM cars WHERE id = :id');
$stmt->execute(['id' => $_GET['id']]);
$car = $stmt->fetch();
$error = [];
if (count($_POST) > 0) {
    if (empty($_POST['make'])) {
        $error[] = 'Make is required';
    }
    if (empty($_POST['model'])) {
        $error[] = 'Model is required';
    }
    if (empty($_POST['year'])) {
        $error[] = 'Year is required';
    }
    if (empty($_POST['price'])) {
        $error[] = 'Price is required';
    }
    if (empty($error)) {
        $stmt =  $pdo->prepare(
            'UPDATE cars 
                SET make = :make, 
                    model = :model, 
                    year = :year, 
                    price = :price,
                    fuel_id = :fuel_id
                WHERE id = :id'
        );
        $result = $stmt->execute([
            'make' => $_POST['make'],
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'price' => $_POST['price'],
            'fuel_id' => $_POST['fuel_id'],
            'id' => $_GET['id']
        ]);
        if ($result) {
            header('Location: index.php');
        } else {
            $error[] = 'Something went wrong';
        }
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
    <a href="index.php">Home</a>
    <?php foreach ($error as $e) { ?>
        <p class="error"><?php echo $e ?></p>
    <?php } ?>
    <h1>Car ID: <?php echo $car['id'] ?></h1>
    <form method="post">
        <div class="form">
            <label>
                <span>Make</span>
                <input type="text" name="make" value="<?php echo $car['make'] ?>" />
            </label>
            <label>
                <span>Model</span>
                <input type="text" name="model" value="<?php echo $car['model'] ?>" />
            </label>
            <label>
                <span>Year</span>
                <input type="number" name="year" value="<?php echo $car['year'] ?>" />
            </label>
            <label>
                <span>Price</span>
                <input type="number" name="price" value="<?php echo $car['price'] ?>" />
            </label>
            <label>
                <span>Fuel</span>
                <select name="fuel_id">
                    <?php foreach ($fuels as $fuel) { ?>
                        <option 
                            value="<?php echo $fuel['id'] ?>"
                            <?php echo $fuel['id'] == $car['fuel_id'] ? 'selected' : '' ?>
                        >
                            <?php echo $fuel['fuel'] ?>
                        </option>
                    <?php } ?>
                </select>
            </label>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>