<?php

/*
First Method for hashing
$sensitiveData = "Secret Password";
$salt = bin2hex(random_bytes(16)); //generate random string
$pepper = ":2+o-0[B]5";

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);


echo "The salt is <b>" . $salt . ".</b><br>The data to hash is <b>" . $dataToHash .  ".</b><br>The hash is <b>" . $hash . "</b><br>"; 


$sensitiveData = "Secret Password";
$storedSalt = $salt;
$pepper = ":2+o-0[B]5";
$dataToHash = $sensitiveData . $storedSalt . $pepper;
$verificationHash =  hash("sha256", $dataToHash);

if ($hash == $verificationHash) {
    echo "They are the same";
}

else {
    echo "They are not the same";
}

*/

//Second Mathod for Hashing
$pwdSignup = "Krossing";

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options); //hash the password using a built-in function and parameters.

$pwdLogin = "Krossing";

//password_verify($pwdLogin, $hashedPwd); - compare the unencrypted text and the encrypted text using the function to know if the password is the same.

if (password_verify($pwdLogin, $hashedPwd)) {
    echo "They are the same";
}

else {
    echo "They are not the same";
}