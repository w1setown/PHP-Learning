<?php
echo $_SERVER["DOCUMENT_ROOT"]; // shows the root directory of the server. It is the directory where the script is located. 
                                // If the script is located in "C:/xampp/htdocs/test.php", it will show "C:/xampp/htdocs"
echo "<br>";
echo $_SERVER["PHP_SELF"];      // shows the path of the current script. If the URL is "http://example.com/test.php", it will show "/test.php"

echo "<br>";
echo $_SERVER["SERVER_NAME"]; // shows the name of the server. It is the domain name of the server or IP address

echo "<br>";
echo $_SERVER["REQUEST_METHOD"]; // shows what method was used to access the page. It can be GET, POST, PUT, DELETE

echo "<br>";
echo $_GET["name"]; // shows the value of the name variable in the URL. If the URL is "http://example.com?name=John", it will show "John"
// echo $_GET["eyecolor"]; // shows the value of the eyecolor variable in the URL 

echo "<br>";
echo $_REQUEST["name"];   // shows the value of the name variable in the form submission (GET or POST)
// echo $_FILES["name"];  // shows the name of the file uploaded, if any
// echo $_COOKIE["name"]; // shows the value of the cookie named "name". 
                          // Cookies are used to store data on the client's computer. They are often used to remember user preferences


echo "<br>";
echo $_SESSION["username"] = "John"; // sets the value of the session variable named "username" to "John". 
                                     // Sessions are used to store data on the server, which can be accessed across multiple pages
echo "<br>";
echo $_SESSION["username"]; // shows the value of the session variable named "username". If the session variable is set to "John", it will show "John"
$_ENV                       // shows the environment variables. These are variables that are set by the server or the system,
                            // and can be accessed by the PHP script. They are often used to store configuration settings

?>