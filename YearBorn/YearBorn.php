<!DOCTYPE html>
<html>
<head>
    <title>Year Born</title>
    <link rel="stylesheet" type="text/css" href="assets/style/stylesheet.css">
</head>
<body>
<?php 
    $my_name = "Gabriel"; 
       
    $my_day = 9;
    $my_month = 1;
    $my_year = 1999;
    $current_year = 2024;

    $currentDate = new DateTime(); // This will automatically use the current date
    $MybirthDate = new DateTime("$my_year-$my_month-$my_day");
    $my_age = $current_year - $my_year;
    ?>
    <p class="p">Hello, my name is <?php echo $my_name ?> and I was born <?php echo $my_day ?>/<?php echo $my_month ?>/<?php echo $my_year ?>, that means, I am currently <?php echo $my_age ?> years old.</p>
    <p class="p">When were you born? </p>

    <br>
    
    <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $birthdate = $_POST['birthdate'];
    if (!empty($birthdate)) {
        $birthdate = DateTime::createFromFormat('d/m/Y', $birthdate);
        $currentDate = new DateTime();
        $interval = $birthdate->diff($currentDate);
        $age = $interval->y;
        echo "<p class='p'>So you were born on " . $birthdate->format('d/m/Y') . ", that means, you are currently " . $age . " years old.</p>";
    }
}
?>

<div id="birthdate-container">
    <form method="post">
        <label for="birthdate">Enter your birthdate (d/m/Y):</label><br>
        <input type="text" id="birthdate" name="birthdate"><br>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
