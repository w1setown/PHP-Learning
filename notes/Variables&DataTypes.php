<!DOCTYPE html>
<html>

<head>
    <title>Variables & Data Types</title>
</head>

<body>
    <?php
    // Scalar types
    $string = "Gabriel";
    $integer1 = 1999; //No quatation marks, as it would change the value to a string
    $float = 3.1459;
    $bool = true; //or false | 1 = true or 0 = false
    
    // Array types
    $array = array("Gabriel", "Zaki", "Magne");   // or $array = ["Gabriel", "Zaki", "Magne"]; | Arrays are indexed starting from 0
    
    // Object types
    $object = null;

    // DEFAULT VALUE FOR EACH DATA TYPE  
    $string = "";
    $integer = 0;
    $float = 0;
    $bool = false;
    $array = [];
    $object = null;

    // Examples of types being used
        // String ?>
        <?php 
        $name = "Gabriel"; 
        $age = 25
        ?>
        <p>Hello, my name is <?php echo $name ?> and I am from <?php echo $integer1 ?>, that means, I am currently <?php echo $age ?> years old. <p>
</body>


</html>