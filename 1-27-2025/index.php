<?php
require_once 'includes/config_session.inc.php'; 
require_once 'includes/signup_view.inc.php'; 
require_once 'includes/login_view.inc.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Create A Login System in PHP</title>
</head>
<body>
  <div class="centerDiv"> 
    <h3>
        <?php
           output_username();
        ?>

        <?php
                if(!isset($_SESSION["user_id"])) { ?>
                    <h1>Login</h1><hr/>
                    <form action="includes/login.inc.php" method="post">
                    <input type="text" name="username" placeholder="Username"/>
                    <input type="password" name="pwd" placeholder="Password"/>
                    <button>Login</button>
    </form>
               <?php  } ?> 

    <?php
        check_login_errors();
    ?>

<h1>Sign Up</h1><hr/>
 <form action="includes/signup.inc.php" method="post">
    <?php
            signup_inputs();
    ?>
                <button>Sign Up</button>
    </form>

    <?php
    check_signup_errors();
    ?>

<h1>Logout</h1><hr/>
    <form action="includes/logout.inc.php" method="post">
                <button>Logout</button>
    </form>
</div>
</body>
</html>