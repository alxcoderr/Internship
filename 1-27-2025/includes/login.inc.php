<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

         //ERROR HANDLERS
     $errors = [];

     if (is_input_empty($username, $pwd)){
        $errors["empty_input"] = "Fil in all the fields!";
     }

     $result = get_user($pdo, $username);

     if (is_username_wrong($result)) {
        $errors["login_incorrect"] = "Incorrect login info!";
     }

     if(!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
            $errors["login_incorrect"] = "Incorrect login info!";
     }
     
     require_once 'config_session.inc.php';

     if ($errors) {
        $_SESSION["errors_signup"] = $errors;
        header("Location: ../index.php");
        die();
     }
     $newSessionId = session_create_id();
     $sessionId = $newSessionId . "_" . $result["id"];
     session_id($sessionId);
  } 
    
  

    catch (PDOException $e)  //catch the PDO Exception and name it variable e. The e serves as a placeholder that we are going to refer to in the curly braces.
    {
        die("Query Failed: " . $e->getMessage());
    }
}
else { 
    header("Location: ../index.php");
    die();
}