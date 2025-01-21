<?php
    $productList = ['Apple', 'Orange', 'Banana', 'Mango'];
    $message = '';
    switch (@$_POST['product']) {
        case 'Apple':
            $message = 'Apple is $1.00';
            break;
        case 'Orange':
            $message = 'Orange is $2.00';
            break;
        case 'Banana':
            $message = 'Banana is $3.00';
            break;
        case 'Mango':
            $message = 'Mango is $4.00';
            break;
        default:
            $message = 'Please Select Product';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $message ?></h1>
    <form method="post">
        <select name="product" id="product">
            <option value="">None</option>
            <?php foreach($productList as $product) {
                $selected = $product == $_POST['product'] ? 'selected' : '';
                echo "<option value=\"$product\" $selected>$product</option>";
            } ?>
        </select>
        <input type="submit" value="Submit" />
    </form>
</body>
</html>