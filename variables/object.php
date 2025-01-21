<?php
class Car {
    public $brand;
    public $color;
    function drive() {
        return "The car is driving.";
    }
}

$car = new Car();
$car->brand = "Toyota"; // Assign a value to the 'brand' property
$car->color = "Red";    // Assign a value to the 'color' property

echo $car->brand; // Outputs: Toyota
echo $car->drive(); // Outputs: The car is driving.

