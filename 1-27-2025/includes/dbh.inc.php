<?php

$host = 'localhost';
$dbname = 'myfirstdatabase';
$dbusername = "root"; //defining the database username.
$dbpassword = ""; //defining the database password.

try 
{
    $pdo = new PDO ("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword); //syntax for connecting to the database using a PDO(PHP Data Object).
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // IF IT GETS AN ERROR, IT SHOULD THROW AN EXCEPTION
} 

catch (PDOException $e)  //catch the PDO Exception and name it variable e. The e serves as a placeholder that we are going to refer to in the curly braces.
{
    die("Connection failed: " . $e->getMessage());
}
