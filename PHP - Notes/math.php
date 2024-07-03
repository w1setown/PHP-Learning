<?php
echo "<h2>Math Operations</h2>";
    $num1 = 10;
    $num2 = 20;

    // Addition
    echo "<h3> Addition </h3>";
    $sum = $num1 + $num2;
    echo "Sum: " . $sum . "<br>";

    // Subtraction
    echo "<h3> Subtraction </h3>";
    
    $diff = $num1 - $num2;
    echo "Difference: " . $diff . "<br>";

    // Multiplication
    echo "<h3> Multiplication </h3>";
    $product = $num1 * $num2;
    echo "Product: " . $product . "<br>";

    // Division
    echo "<h3> Division </h3>";
    $quotient = $num1 / $num2;
    echo "Quotient: " . $quotient . "<br>";

    // Modulus
    echo "<h3> Modulus </h3>";
    $modulus = $num1 % $num2;
    echo "Modulus: " . $modulus . "<br>";
?>