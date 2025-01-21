<?php
// Price list of products
$priceList = [
    "rice" => 15.00,
    "egg" => 10.00,
    "chicken" => 30.00,
    "beef" => 35.00,
    "juice" => 20.00
];
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            width: 100px;
            border: 1px black solid;
            padding: 5px;
        }
        tfoot td {
            font-style: italic;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($priceList as $product => $price) {
                $total += $price;
                echo "<tr><td>$product</td>";
                echo "<td>$price</td></tr>";
            } ?>
        </tbody>
        <tfoot>
            <tr>
                <td>Average</td>
                <td><?php echo $total / count($priceList) ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>