<?php
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo $fullName;

echo "<br>";
$firstName .= " " . $lastName; // Shortcut for $firstName = $firstName . " " . $lastName;
echo $firstName;