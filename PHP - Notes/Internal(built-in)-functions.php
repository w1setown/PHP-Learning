<?php

// Substring Functions
echo "<h3>" . "Substring Functions" . "</h3>";
$string = "hello, silly world!";
echo substr($string, 2, -2); // This is used to print the result of the query, with the first two characters and the last two characters removed

echo "<br>";

$explodingstring = " Hello WORLD" . "<br>";
print_r(explode(" ", $explodingstring)); // This is used to explode the string into an array, with the space as the delimiter

echo "<br>";

// Math Functions

echo "<h3>" . "Math Functions" . "</h3>";

$absstring = 5.5;
echo abs($absstring) . "<br>"; // This is used to print the absolute value of the number
echo round($absstring) . "<br>"; // This is used to round the number
echo pow($absstring, 2) . "<br>"; // This is used to raise the number to the power of the second number