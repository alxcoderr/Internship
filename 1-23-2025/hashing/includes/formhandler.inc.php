<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

try {
    require_once "dbh.inc.php";

    $query = "INSERT INTO users (username, pwd, email) VALUES (:username,:pwd,:email);";

    $stmt = $pdo->prepare($query);   

    $options = [
        'cost' => 12
    ];
    
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options); //hash the password using a built-in function and parameters.
    

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $pdo=null;
    $stmt=null;

    header("Location: ../index.php");

    die();
} 

catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
  } 

} else {
   header("Location: ../index.php");
}
