<?php
$host = "localhost";   // The host of the database
$user = "root";        // The username of the database
$password = "";        // The password of the database
$database = "storage"; // The name of the database

$connection = new mysqli($host, $user, $password, $database); // Create a new connection to the database

$connection->set_charset("utf8mb4"); // Set the character set to utf8mb4, 
                                     //this is important for special characters

// print_r($connection); // Check the connection