<?php
require_once 'includes/config_session.inc.php'; 
require_once 'includes/signup_view.inc.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Create A Signup System in PHP</title>
</head>
<body>
<div class="centerDiv">
   <h1>Login</h1>
    <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="Username"/>
                <input type="password" name="pwd" placeholder="Password"/>
                <button>Login</button>
    </form>

<h1>Sign Up</h1>
 <form action="includes/signup.inc.php" method="post">
    <?php
            signup_inputs();
    ?>
                <button>Sign Up</button>
    </form>

    <?php
    check_signup_errors();
    ?>
</div>
</body>
</html>