<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset= "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Form Handler</title>
</head>

<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input type="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="lasttname">Lastname?</label>
            <input type="lastname" type="text" name="lastname" placeholder="Lastname...">

            <label for="favouritepet">Favourite Pet?</label>
            <select id="favouritepet" name="favouritepet">
                <option value="none">None</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
                <option value="Dog">Dog</option>
            </select>

            
            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>