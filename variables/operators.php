<?php
$x = 10;
$y = $x ** 2; // $y is now equal to $x squared (100)
$z = $y ** (1/2); // $z is now equal to the square root of $y (10)
var_dump($y, $z);

// echo $x + $y; // Uncomment to See Result
// echo $x - $y; // Uncomment to See Result
// echo $x * $y; // Uncomment to See Result
// echo $x / $y; // Uncomment to See Result
// echo $x % $y; // Uncomment to See Result
// echo $y ** 2; // Uncomment to See Result

// $x += $y; // Equivalent to $x = $x + $y;
// $x -= $y; // Equivalent to $x = $x - $y;
// $x *= $y; // Equivalent to $x = $x * $y;
// $x /= $y; // Equivalent to $x = $x / $y;
// $x %= $y; // Equivalent to $x = $x % $y;
// $x **= 2; // Equivalent to $x = $x ** 2;
// echo $x;

// Null Coalescing Operator (if $guess is null, $name will be 'John', 
//   otherwise $name will be $guess))
$guess = null;
$name = $guess ?? 'John'; 
var_dump($name);

// Ternary Operator (if $switch is true, $light will be 'on', 
//   otherwise $light will be 'off')
$switch = true;
$light = $switch ? 'on' : 'off'; // Value oof $light is now 'on'
var_dump($light);

echo @$nonexistentVar; // @ will suppress any error messages
echo $nonexistentVar; // This will display error messages
