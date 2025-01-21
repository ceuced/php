<?php
$x = false; // Change to true or false to experiment
$y = false; // Change to true or false to experiment

echo "AND ";
var_dump($x && $y);
echo "<br> OR ";
var_dump($x || $y);
echo "<br> NOT ";
var_dump(!$x);
echo "<br> XOR ";
var_dump($x xor $y);