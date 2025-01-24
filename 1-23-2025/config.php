<?php

//Must-have when dealing with sessions.
ini_set('session.use_only_cookies', 1); //This means that PHP will only use cookies to store the session ID on the client side, and will not use URL-based session IDs. This improves security by preventing session ID leakage through URLs
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if (!isset($_SESSION['last_regeneration']))  //check if the last_regeneration was not set.
{
    session_regenerate_id(true); //create a new regenerate id
    $_SESSION['last_regeneration'] = time(); //set the last regeneration for the current time
} 

else 
{
    $interval = 60 * 30;
    if (time() - $_SESSION['last_regeneration'] >= $interval) {
        session_regenerate_id(true);  
        $_SESSION['last_regeneration'] = time();
    }
}