<?php 
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in Functions</title>
</head>
<body>
    <?php
          $name = " CEO Hammed! ";
          function sayHello (int $num01, $num02)
          {
            global $name; //To access the global variable name, we have to use the global function.
            $result = $num01 + $num02;
            return $result;
          }

         echo sayHello(147,1);


    ?>
</body>
</html>