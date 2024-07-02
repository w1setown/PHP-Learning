<!DOCTYPE html>
<html>
<head>
    <title>Operators</title>
</head>

    <body>

        <?php
            // String operators
            $a = "Hello";
            $b = "World!";
            $c = $a . $b; // Concatenation $c = $a . " " . $b; would output "Hello World!"
            echo $c . "<br>";
        ?>
    <br>
        <?php
            // Arrithmetic operators
            echo 5 + 5 . "<br>"; // Addition
            echo 5 - 5 . "<br>"; // Subtraction
            echo 5 * 5 . "<br>"; // Multiplication
            echo 5 / 5 . "<br>"; // Division
            echo 5 % 5 . "<br>"; // Modulus
            echo 5 ** 5 . "<br>"; // Exponentiation
            echo 5 + 5 * 10 . "<br>"; // Order of operations
        ?>
    <br>
        <?php
            // Assignment operators
            $a = 2; // 
            $a += 2; // $a = $a + 2; 
            echo $a . "<br>"; // 4
        ?>    
    <br>
        <?php
            // Comparison operators
            $a = 2;
            $b = 4; // "4" == 4; would output true because we're only checking if they are the same value, not datatype.

            if ($a == $b) { // If === We're checking if they are the same value and datatype | 
                echo "true";// If we !== we're checking if they are not the same value and datatype |
            } else {
                echo "false";
            }
        ?>
    <br><br>
        <?php
            // Logical operators
            $a = 2;
            $b = 4;

            if ($a == 2 && $b == 4) { // && = and , || = or , ! = not
                echo "true";
            } else {
                echo "false";
            }
        ?>
    <br><br>
        <?php
            // Increment/Decrement operators
            $a = 1;
            ++$a; // $a = $a + 1;
            $a++; // $a = $a + 1;
            echo $a . "<br>"; // 3
            $a--; // $a = $a - 1;
            echo $a . "<br>"; // 2
        ?>

    </body>
