<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
/*   
   $text = 10;
        do {
            echo $text;
            $text++;
        }
        while ($text < 10);
*/

$fruits = array("Strawberry","Banana", "Mango");
foreach ($fruits as $fruit => $color) {
    echo "This is a ". $fruit . " that has color of " . $color . "<br>";
}
?>
</body>
</html>