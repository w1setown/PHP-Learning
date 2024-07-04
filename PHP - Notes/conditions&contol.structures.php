<?php

// if, else if and else statements 
echo "<h4> If, Else If and Else Statements </h4>";
$bool = true;
$a = 1;
$b = 1;

if ($a < $b && !$bool) { // && = and , || = or , ! = not | If $a is less than $b and $bool is false, then echo the following statement
    echo "The 1st condition is true. <br>";
}
else if ($a < $b && $bool) {
    echo "The 2nd condition is true. <br>";
}
else if ($a > $b && !$bool) {
    echo "The 3rd condition is true. <br>";
}
else if ($a == $b && !$bool) {
    echo "The 4th condition is true. <br>";
}
elseif ($a == $b && $bool) {
    echo "The 5th condition is true. <br>";
}
else {
    echo "None of the conditions are true <br>";
}



// Switch statements                        // Instead of writing multiple if statements, we can use switch statements to compare a variable with multiple values.
echo "<h4> Switch Statements </h4>";        // Switch statements are similar to if statements, but they are more concise and easier to read.
//                                          // The perk of using switch statements is that it is easier to read and write, and it is also faster than if statements.
$bool = true;
$c = 12;
$d = -1;

switch($c){
    case 1;
        echo "This is the first and correct case <br>";
        break;
    case 2;
        echo "<p>This is the second and correct case <p><br>";
        break;
    default;
        echo "This is the default case, thefore, none are true! ";
        break;
}





// Match statements                         // Instead of writing multiple if statements and switch statements, 
echo "<h4> Match Statements </h4>";         // we can use match statements to compare a variable with multiple values. 
//                                          // Match statements are similar to switch statements, but they are more concise and easier to read. 
$bool = true;                               // We use match statements instead of if and switch statements, because they give us the same functionality, 
$e = 1;                                     // but they are more concise and easier to read.
$f = 1;

$result = match ($e){
    1, 3, 5 => "This variable is equal to one! <br>",
    2 => "This variable is equal to two! <br>",
    default => "This variable is not equal to one or two! <br>"
};

echo $result;