<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Generator</title>
</head>
<body>
    <?php
    $newNumber = rand(1,3);
    $fullName = $newNumber . ".png";
    $finalImageName = strval($fullName);

    echo "<Img src='$finalImageName' height='100px' width='100px'/>";

    ?>
</body>
</html>