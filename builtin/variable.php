<?php
/**
 * Useful variable handling functions.
 */
$var = array(1,2,3,4,5);
var_dump(is_array($var));
var_dump(is_bool($var));
var_dump(is_numeric($var));
var_dump(is_string($var));
var_dump(isset($var['name']));