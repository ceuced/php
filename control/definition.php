<?php
// Price list of products
$priceList = [
    "rice" => 15.00,
    "egg" => 10.00,
    "chicken" => 30.00,
    "beef" => 35.00,
    "juice" => 20.00
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        dt {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <dl>
        <?php foreach($priceList as $product => $price): ?>
            <dt><?php echo ucfirst($product); ?></dt>
            <dd><?php echo $price; ?></dd>
        <?php endforeach; ?>
    </dl>
</body>
</html>