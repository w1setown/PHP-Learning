<?php

//var_dump($_SERVER["REQUEST_METHOD"]); // shows what method was used to access the page. It can be GET, POST, PUT, DELETE
if ($_SERVER["REQUEST_METHOD"]== "POST") { 

    $firstname = htmlspecialchars($_POST["firstname"]); /*HTML special characters are converted to entities, so they are not interpreted as HTML. This helps prevent XSS attacks.*/
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = array_key_exists("favouritepet", $_POST) ? htmlspecialchars($_POST["favouritepet"]) : '';

    echo "These are the data, you have submitted:";
    echo "<br>";
    echo "First Name: " . $firstname . "<br>";
    echo "Last Name: " . $lastname . "<br>";
    echo "Favourite Pet: " . $favouritepet . "<br>";

    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}

/*htmlentities — Convert all applicable characters to HTML entities*/