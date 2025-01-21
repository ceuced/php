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
        for($i = 0; $i < count($list); $i++) {
            echo "<li>$list[$i]</li>";
        }
        ?>
    </ul>
    <!-- <h1>Alternate Syntax</h1>
    <ul>
        <?php for($i = 0; $i < count($list); $i++): ?>
            <li><?php echo $list[$i]; ?></li>
        <?php endfor; ?>
    </ul> -->
</body>
</html>