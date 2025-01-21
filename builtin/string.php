<?php
/**
 * Useful string functions.
 */
var_dump(explode(",", "John,Alice,Bob")); // Output: array(3) { [0]=> string(4) "John" [1]=> string(5) "Alice" [2]=> string(3) "Bob" }
var_dump(implode(",", ["John", "Alice", "Bob"])); // Output: "John,Alice,Bob"
var_dump(strtoupper('hello')); // Output: "HELLO"
var_dump(strtolower('HELLO')); // Output: "hello"
var_dump(ucfirst('hello world')); // Output: "Hello"
var_dump(strlen('hello world')); // Output: 11