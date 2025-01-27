<?php

declare(strict_types=1);

function signup_inputs(){
// Checking for the username data, checking if the username is taken and outputing the username back to the user if it is not taken   
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<input type="text" name="username" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] .'"/>';
    } else {
        echo '<input type="text" name="username" placeholder="Username"/>';
    }

// Outputting the password empty, as users must always retype password for safety
    echo '<input type="password" name="pwd" placeholder="Password"/>';

// Checking if the email is stored, checking if the email has been registered and checking if its a valid email.
    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
        echo '<input type="text" name="email" placeholder="Email" value="' . $_SESSION["signup_data"]["email"] .'"/>';
    } else {
        echo '<input type="text" name="email" placeholder="Email"/>';
    }
}

function check_signup_errors() 
{
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup']; 

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p style="color:red">'. $error .'</p>';
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p style="color:green">Sign Up was a success!</p>';
    }
}
