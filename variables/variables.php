<?php
// Scalar Types
$name = "John Doe"; // String
$age = 30; // Integer
$price = 99.99; // Float or Double
$is_logged_in = true; // Boolean

// Compund Types
$fruits = array("apple", "banana", "cherry"); // Array
$person = array("name" => "John", "age" => 25); // Array
$fruits = ["apple", "banana", "cherry"]; // Array Short Syntax
$person = ["name" => "John", "age" => 25]; // Array Short Syntax

class Car {
    public $brand;
    public function setBrand($name) {
        $this->brand = $name;
    }
}
$myCar = new Car(); // Object
$myCar->setBrand("Toyota"); // Object Method
echo $myCar->brand; // Object Property
$value = NULL;
$file = fopen("example.txt", "r");