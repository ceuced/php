<?php
$message = "";
$guess = 56;
if (isset($_POST['guess']) === false) {
    $message = "Please enter a number to guess.";
} elseif ($_POST['guess'] < $guess) {
    $message = "You guessed low.";
    // if ($guess - $_POST['guess'] < 10) {
    //     $message .= " You were off by less than 10.";
    // }
}  elseif ($_POST['guess'] > $guess) {
    $message = "You guessed high.";
    // if ($_POST['guess'] - $guess < 10) {
    //     $message .= " You were off by less than 10.";
    // }
} else {
    $message = "You guessed the number!";
}

// Alternate Syntax
// if (isset($_POST['guess']) === false) :
//     $message = "Please enter a number to guess.";
// elseif ($_POST['guess'] < $guess) :
//     $message = "You guessed low.";
// elseif ($_POST['guess'] > $guess) :
//     $message = "You guessed high.";
// else :
//     $message = "You guessed the number!";
// endif;

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
        <input type="number" name="guess" value="<?php echo $_POST['guess'] ?? "0" ?>" />
        <input type="submit" value="Guess" />
    </form>
</body>
</html>