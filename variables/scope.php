<?php 
// Local and Global Scope
function displayNumber() {
    // global $number; // Uncomment to make $number global and remove the error
    $number = 10; // Local variable
    echo $number;
}
displayNumber(); // Outputs: 10
echo '<br>';
echo $number; // Error: Undefined variable

// Static Variable
// function incrementCounter() {
//     static $counter = 0; // Static variable
//     $counter++;
//     echo $counter . "<br>";
// }
// incrementCounter(); // Outputs: 1
// incrementCounter(); // Outputs: 2
// incrementCounter(); // Outputs: 3

// Parameter Scope
// function greet($name, $age) {
//     echo "Hello, $name! You are $age years old.";
//     echo '<br>';
// }

// greet("John", 30); // Outputs: Hello, John!
// greet("Alice", 26); // Outputs: Hello, Alice!