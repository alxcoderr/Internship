<?php
    session_start(); //creates a session or connects to an existing seesion for the domain(localhost).
    unset($_SESSION["username"]); //deletes only the username session data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Sessions in PHP</title>
</head>

<body>
    <?php
        echo $_SESSION["username"];
    ?>
</body>

</html>