<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mcee.css"/>
    <title>Main Calculator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
       
        <input type="number" name="num01" placeholder="Number 1" />
        
        <select name="operator">
                <option value="addition">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
        </select>
         
        <input type="number" name="num02" placeholder="Number 2" />
    </form>
</body>
</html>