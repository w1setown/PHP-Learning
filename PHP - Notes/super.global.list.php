<?php
$_SERVER["key"];  // Shows the server information. This is an array that contains information about the server and the current script
$_GET["key"];     // Shows the value of the variable in the URL. This is used to pass data from one page to another using the URL
$_POST["key"];    // Shows the value of the variable in the form submission. This is used to pass data from the form to the server
$_REQUEST["key"]; // Shows the value of the variable in the form submission (GET or POST). 
                  // It is a combination of $_GET and $_POST
$_FILES["key"];   // shows the name of the file uploaded, if any. 
                  // This is used when you want to upload files from the client's computer to the server
$_COOKIE["key"];  // Shows the value of the cookie named "". Cookies are used to store data on the client's computer. 
                  // They are often used to remember user preferences
$_SESSION["key"]; // Shows the value of the session variable named "". 
                  // Sessions are used to store data on the server, which can be accessed across multiple pages
$_ENV["key"];     // Shows the environment variables. These are variables that are set by the server or the system,
                  // and can be accessed by the PHP script. They are often used to store configuration settings
?>