<?php
require "data.base.forbindelse.php";         // This makes it so, that the file is required to run the script, 
                                             //we could also use include, but require makes it so, that the script stops running if the file is not found

$sql = "SELECT id, item, amount FROM lager"; // This is used to select the id, item and amount from the lager table
$result = $connection->query($sql);          // This is used to execute the query

/*while ($row = $result->fetch_assoc()) {    // Returns an associative array of the current row in the result set 
    echo "ID: " . $row["id"] . " - Item: " . $row["item"] . " - Amount: " . $row["amount"] . "<br>";
}
*/

/*while ($row = $result->fetch_array()) {    // Returns an array of the current row in the result set.
    echo "ID: " . $row[0] . " - Item: " . $row[1] . " - Amount: " . $row[2] . "<br>";
    echo "ID: " . $row["id"] . " - Item: " . $row["item"] . " - Amount: " . $row["amount"] . "<br>";
}*/

while ($row = $result->fetch_object()) {     // Returns an object of the current row in the result set.
    echo "ID: " . $row->id . " - Item: " . $row->item . " - Amount: " . $row->amount . "<br>"; // This is used to print the result of the query
}
print_r($result); // This is used to print the result of the query