<?php
$list = [];
if (isset($_POST['list'])) {
    $list = explode(',', $_POST['list']);
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
    <form method="post">
        <label for="list">Enter comma separated grocery list:</label>
        <br />
        <input type="text" name="list" id="list" value="<?php echo $_POST['list'] ?? '' ?>" />
        <input type="submit" value="Submit" />
    </form>
    <h1>Below is your grocery list</h1>
    <ul>
        <?php
        // Without Index
        foreach ($list as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
    <!-- <h1>Below is your grocery list w/ index</h1>
    <ul>
        <?php
        // With Index ($index => $value)
        foreach ($list as $i => $item) {
            echo "<li>$item - $i</li>";
        }
        ?>
    </ul> -->
    <!-- <h1>Alternate Syntax</h1>
    <ul>
        <?php foreach ($list as $item) : ?>
            <li><?php echo $item ?></li>
        <?php endforeach; ?>
    </ul> -->
    <!-- <h1>Alternate Syntax w/ index</h1>
    <ul>
        <?php foreach ($list as $index => $item) : ?>
            <li><?php echo "$item - $index" ?></li>
        <?php endforeach; ?>
    </ul> -->
</body>
</html>