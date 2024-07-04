<?php

// Indexed Arrays
$fruits = array("apple", "banana", "orange", "grape", "kiwi");
$fruits = [
    "apple",  // 0 
    "banana", // 1 -> 2, since we have added mango in line 14
    "orange", // 2 -> 3, since we have added mango in line 14
    "grape",  // 3 -> 4, since we have added mango in line 14
    "kiwi"    // 4 -> 5, since we have added mango in line 14
];
echo $fruits[1] . "<br>"; // banana

$fruits[1] = "mango"; // add mango to the end of the array
echo $fruits[1] . "<br>"; // mango

unset($fruits[5]); // remove kiwi from the array
array_splice($fruits, 3, 4); // array_splice(array, start, length) - What it does is that it removes the elements 
//                                                                   from the array starting from the index 3 to the index 4

print_r($fruits) ; // Array ( [0] => apple [1] => mango [2] => orange [3] => grape )


echo "<br>";

// Associative Arrays
$tasks = [
    "villain" => "Magneto",    // Villain is the key and Magneto is the value, it will therefore look like so: [1] => Magneto
    "hero" => "Wolverine",     // Hero is the key and Wolverine is the value, it will therefore look like so: [2] => Wolverine
    "neutral" => "Deadpool",   // Neutral is the key and Deadpool is the value, it will therefore look like so: [3] => Deadpool
    "mentor" => "Professor X", // Mentor is the key and Professor X is the value, it will therefore look like so: [4] => Professor X
];
$tasks["writer"] = "Stan Lee"; // add Stan Lee to the end of the array, with the key "writer". It will therefore look like so: [5] => Stan Lee
sort($tasks); // sort the array by key. The way sort works is that it will sort the array by the key, in this case it will sort the array by the key in alphabetical order.
print_r($tasks); // Array ( [villain] => Magneto [hero] => Wolverine [neutral] => Deadpool [mentor] => Professor X )

echo "<br>";

// Multidimensional Arrays | are arrays that contain other arrays, we use them to store complex data structures.
$fruits2 = ["apple", "banana", "orange", "grape", "kiwi"]; // Here we are creating an array, that is indexed by default and we are adding elements to it

array_push($fruits2, "lemon",); // add multiple elements to the end of the array
print_r($fruits2); // Array ( [0] => apple [1] => banana [2] => orange [3] => grape [4] => kiwi [5] => kiwi )

echo "<br>";

// Array Splice
$meats = ["beef", "venison", "pork", "chicken", "lamb"]; // Here we are creating an array, that is indexed by default and we are adding elements to it
$vegetables = ["carrot", "potato", "onion", "garlic", "tomato"]; // Here we are creating an array, that is indexed by default and we are adding elements to it

array_splice($meats, 2, 0, $vegetables);
print_r($meats);

echo "<br>";

// Associative & Multi-dimensional array

$food = [
    array("beef", "venison", "pork", "chicken", "lamb"), // Here we are creating an array, that is indexed by default and we are adding elements to it
    array("carrot", "potato", "onion", "garlic", "tomato"), // Here we are creating an array, that is indexed by default and we are adding elements to it
    array("apple", "banana", "orange", "grape", "kiwi"),
];

echo $food[0][1] . "<br>"; // venison

// Associative 
$food2 = [
    "meats" => ["beef", "venison", "pork", "chicken", "lamb"], // Here we are creating an array, that is indexed by default and we are adding elements to it
    "vegetables" => ["carrot", "potato", "onion", "garlic", "tomato"], // Here we are creating an array, that is indexed by default and we are adding elements to it
    "fruits" => ["apple", "banana", "orange", "grape", "kiwi"],
];

echo $food2["meats"][0] . "<br>"; // lamb
