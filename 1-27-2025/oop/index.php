<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming With PHP</title>
</head>
<body>
    <?php


     function getCarInfo($brand, $color){
                return "Brand: " . $brand . ". Color:" . $color;
     }

     echo getCarInfo("Volvo", "green");
     ?>
</body>
</html>