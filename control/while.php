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
        $i = 0;
        while ($i < count($list)) {
            echo "<li>$list[$i]</li>";
            $i++;
        }
        ?>
    </ul>
    <!-- <h1>Alternate Syntax</h1>
    <ul>
        <?php
        $i = 0;
        while ($i < count($list)) :
            ?>
            <li><?php echo $list[$i] ?></li>
            <?php
            $i++;
        endwhile;
        ?>
    </ul> -->
</body>
</html>