<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP with SQL - PDO</title>
    <link rel="stylesheet" href="css/main.css"/>
</head>

<body>
    <div class="centerDiv">
        <h2>Signup</h2>
            <form action="includes/formhandler.inc.php" method="post">
                <input type="text" name="username" placeholder="Username"/>
                <input type="password" name="pwd" placeholder="Password"/>
                <input type="text" name="email" placeholder="Email"/>
                <button>Submit</button>
            </form>
    </div>
</body>
</html>