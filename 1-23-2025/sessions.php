<?php
//Creating a session
    session_start();
    $_SESSION["username"] = "Hammed";

//Deleting a session
    session_unset(); //deletes all the session data
    session_destroy(); //deletes all the seesion data but the effect isnt visible on this page but the effect is felt on other pages.
//We can use both of the above to ensure proper destruction of the sessions.
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