<?php
$first_name = "John"; // Direct Assignment
$last_name = "Doe"; // Direct Assignment
$full_name = $first_name . " " . $last_name; // From Another Variable
$sum = 10 + 20; // From Expression
$reference = &$sum; // Reference Assignment
$reference = 200; // Change Reference Value
$dynamic = "sum"; // Initialize Dynamic Variable
$$dynamic = 100; // Dynamic Assignment (sum is now 100)
define("PI", 3.14); // Constant Assignment
const EARTH_RADIUS = 6378; // Constant Assignment

// var_dump($first_name); // Replace $first_name with variable you want to see