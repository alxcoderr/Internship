<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays (Indexed & Associative)</title>
</head>
<body>

<?php

//$fruits = array("apple", "banana", "cherry");

/* Adding a value to an array
echo "$fruits[0] is $moreFruits[0]";
$fruits[] = "orange";
echo "$fruits[3]";
*/

/* Removing a value from an array
unset($fruits[0]);
echo "$fruits[0]";
*/

/* Remving an index completely 
array_splice($fruits, 1, 2);
echo $fruits[0];
*/

/*  Working with an Associative Array 
$associativeArray = [
    "laundry" => "Daniel",
    "washing" => "Emeka",
    "cooking" => "Ella",
    "vacuum" => "Jovita",
    "sweeping" => "Jane",
];

$associativeArray["dusting"] = "Aaron"; 
echo  $associativeArray["dusting"];
echo "<br>";
echo $associativeArray["laundry"];
echo "<br>";
print_r($associativeArray);
echo "<br>";
echo count($associativeArray);
echo "<br>";
sort($associativeArray);
print_r($associativeArray);
*/

/*
$moreFruits = ["apple", "banana", "cherry"];
array_push($moreFruits, "Mango", "Pear", "Pineapple", "Watermelon");
print_r($moreFruits);
*/

/* Inserting data into an array
$moreFruits = ["apple", "banana", "cherry"];
array_splice($moreFruits, 1, 0, "Mango");
print_r($moreFruits);
*/

/* Inserting an array into aother array
$fruits = array("apple", "banana", "cherry");
$moreFruits = ["Mango", "Pawpaw", "Strawberry"];
array_splice($fruits, 1, 0,$moreFruits );
print_r($fruits);
*/

/* An array inside another array
$food = [array("Mango", "Orange", "Banana", "Pawpaw", "Strawberry"), "Egg", "Yam"];
echo $food[0][1];
?>
*/

/* Multi Dimensional Array
$food = [
     "fruits" => array("Mango", "Banana", "Orange", "Pawpaw"), 
     "protein" => array("Meat", "Beef", "Fish", "Ponmo"),
     "drinks" => array("Fruit Juice" => "Chivita", "Beef", "Fish", "Ponmo")
    ];

    echo $food["drinks"]["Fruit Juice"];
*/ 


?>
</body>
</html>