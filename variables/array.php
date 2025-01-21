<?php
$profile = [
    'first_name' => 'John', 
    'last_name' => 'Doe', 
    'email' => 'john@example.com'
];
$profile2 = [
    'first_name' => 'John', 
    'last_name' => 'Doe', 
    'email' => 'john@example.com',
];

// var_dump($profile['first_name']); // Output: John
// var_dump($profile['last_name']); // Output: Doe
// var_dump($profile['email']); // Output: john@example.com
var_dump($profile == $profile2);
var_dump($profile === $profile2);
var_dump($profile + $profile2);

// Array with integer keys (index omitted)
// $profile = ['John', 'Doe', 'john@example.com'];
// var_dump($profile[0]); // Output: John
// var_dump($profile[1]); // Output: Doe
// var_dump($profile[2]); // Output: john@example.com
