<?php
// Whenever you create these opening and closing tags, your PHP is going to be parsing this page, and search for these opening 
//and closing tags until it finds one, then it's going to see that PHP code inside those tags.
?>

<body>
    <h1>PHP Echo Tester<hr></h1>
    <p>
        <?php
// echo is a PHP function that allows you to output text to the browser
        echo "Hello, World!"; // Using semicolon to end a statement.
        
        ?>
    </p>



<?php
echo "This is test text written in PHP"; 

echo "<br> This is another test text written in PHP, but here the semicolon has been omitted";
// The closing tag is optional in PHP files that contain only PHP code. 
// It is not required by the PHP parser and can be omitted from files containing only PHP.
?>


<?php
if (true){
    echo"<p>This is a true statement.<p>"; // <- Here I have a PHP statement, this is called a condition
// Whenever you want to create HTML inside a web page,
// you can actually Echo it out using PHP so you can write HTML and content using PHP,
// but this is not really the most optimal way to do things. There is no automatic syntax checking since 
// it is only seen as PHP string, therefore, it is not recommended to do it this way.
}
?>

<?php if (true){?>
<p>This is a truer statement!</p> 
<?php } ?>
<!-- What you can do instead, is you can split up your condition, using the opening and closing PHP tags, 
    around the beginning of the statement and the closing of the statement -->
</body>