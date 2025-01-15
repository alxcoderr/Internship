<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>My First PHP File</title>
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">

            <label for="firstname">First Name: </label>
            <input type="text" name="firstname" placeholder="First Name"/>
            
            <label for="lastname">Last Name: </label>
            <input type="text" name="lastname" placeholder="Last Name"/>
            
            <label for="favouritepets">Favourite Pet: </label>
            <select id="favouritepets" name="favouritepets">
                <option value="None">None</option>
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
                <option value="Bird">Bird</option>
            </select>

        <button type="submit">Submit</button>

    </form>
  </main>
 </body>
</html>