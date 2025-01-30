<?php
require_once 'connection.php';
$fuels = $pdo->query('SELECT * FROM fuels')->fetchAll();
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
            'INSERT INTO cars (make, model, year, price, fuel_id) 
                VALUES (:make, :model, :year, :price, :fuel_id)'
        );
        $result = $stmt->execute([
            'make' => $_POST['make'],
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'price' => $_POST['price'],
            'fuel_id' => $_POST['fuel_id']
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
    <form method="post">
        <div class="form">
            <label>
                <span>Make</span>
                <input type="text" name="make" />
            </label>
            <label>
                <span>Model</span>
                <input type="text" name="model" />
            </label>
            <label>
                <span>Year</span>
                <input type="number" name="year" />
            </label>
            <label>
                <span>Price</span>
                <input type="number" name="price" />
            </label>
            <label>
                <span>Fuel</span>
                <select name="fuel_id">
                    <?php foreach ($fuels as $fuel) { ?>
                        <option value="<?php echo $fuel['id'] ?>"><?php echo $fuel['fuel'] ?></option>
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