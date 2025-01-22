<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Internal (Built-in) Functions in PHP</title>
</head>
<body>
    
    <?php

/* String Length 
$string = "Hello World!";
echo strlen($string);
*/

/* String Position 
$string = "Hello World!";
echo strpos($string, "o");  
*/
    
/* String Position 
$string = "Hello World!";
echo str_replace("World", "Hammed",$string);  
 */

/**String To Lowercase and Uppercase
$string = "Hello World!";
echo strtolower($string);
echo strtoupper($string);
*/

/**Getting a Sub String 
$string = "Hello World!";
echo substr($string, 2, -2); //Starting from position 2 and then ending at the end like 0, -1, -2 which is l
*/

/**Break a string into an array
$string = "Hello World!";
print_r(explode(" ", $string));
*/

/*
$number = 10.6;
echo round($number); //round up the number
echo "<br>";
echo abs($number); //remove any negation from the number
echo "<br>";
echo pow($number, 2); //Get the value of the first number raised to the power of the second number
echo "<br>";
echo sqrt($number); //Get the square root of the number
echo "<br>";
echo rand(1, $number); //Generate a random between the first and the second number.
echo "<br>";
*/

/*
$array = ["apple", "banana", "orange"];
$array2 = ["brown", "black", "yellow"];
echo is_array($array);
echo "<br>";
array_push($array);
print_r($array);
echo "<br>";
array_pop($array);
print_r($array);
echo "<br>";
print_r(array_reverse($array));
echo "<br>";
print_r(array_merge($array, $array2));
echo "<br>";
*/

echo date("y-m-d h:i:s");
echo "<br>";
echo time(); //Since January 1st 1970. Also called a unix time stamp.
echo "<br>";
$date = "2023-04-11 12:00:00";
echo strtotime($date);
echo "<br>";





?>
</body>
</html>