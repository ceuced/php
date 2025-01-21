<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo '<h1>Break Demo</h1>';
foreach($numbers as $number) {
    echo "Printed before Break ($number)<hr />";
    if ($number % 2 == 0) {
        break;
    }
    echo $number . "<hr />";
}

echo '<h1>Continue Demo</h1>';
foreach($numbers as $number) {
    echo "Printed before Continue ($number)<hr />";
    if ($number % 2 == 0) {
        continue;
    }
    echo $number . "<hr />";
}