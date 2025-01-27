<?php

class Signup extends Dbh {
    private $username;
    private $pwd;

    public function __construct($username, $pwd){
        $this->username = $username;
        $this->pwd = $pwd;
    }

    private function insertUser(){
        $query = "INSERT INTO users ('username', 'pwd') VALUES (:username, :pwd);";  
        $stmt = $this->connect()->prepare($query);   //you can do it that way or this way  "$stmt = parent::connect()->prepare($query)", the new way help incase both the parent and child have the same method name.. 
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);
        $stmt->execute();
    }

    private function isEmptySubmit()
    {
            if (isset($this->username) && isset($this->pwd)) {
                return false;
            } else {
                return true;
            }
    }

    public function signupUser()
    {
        //Error Handlers
        if ($this->isEmptySubmit())
        {
            header("Location: " . $_SERVER['DOCUMENT_ROOT'] . '/index.php');
            die();
        }
        //If no errors, sign Up User
        $this->insertUser();
    }
}