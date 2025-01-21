<?php
/**
 * Useful array functions.
 */
$list = ['Apple', 'Banana', 'Grape', 'Mango', 'Orange'];
$pop = array_pop($list);
var_dump($pop); // Output: "Orange"
var_dump($list); // Output: array(4) { [0]=> string(5) "Apple" [1]=> string(6) "Banana" [2]=> string(5) "Grape" [3]=> string(5) "Mango" }

// array_push($list, 'Pear');
// var_dump($list); // Output: array(5) { [0]=> string(5) "Apple" [1]=> string(6) "Banana" [2]=> string(5) "Grape" [3]=> string(5) "Mango" [4]=> string(4) "Pear" }

// $shift = array_shift($list);
// var_dump($shift); // Output: "Apple"
// var_dump($list); // Output: array(4) { [0]=> string(6) "Banana" [1]=> string(5) "Grape" [2]=> string(5) "Mango" [3]=> string(4) "Pear" }

// array_unshift($list, 'Avocado');
// var_dump($list); // Output: array(5) { [0]=> string(7) "Avocado" [1]=> string(6) "Banana" [2]=> string(5) "Grape" [3]=> string(5) "Mango" [4]=> string(4) "Pear" }

// var_dump(count($list)); // Output: 5