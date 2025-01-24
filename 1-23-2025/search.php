<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];

   try {
    require_once "includes/dbh.inc.php";

    $query = "SELECT * FROM comments WHERE username = :usersearch;";

    $stmt = $pdo->prepare($query);   

    $stmt->bindParam(":usersearch", $userSearch);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo=null;
    $stmt=null;
  } 

   catch (PDOException $e) {
     die("Query Failed: " . $e->getMessage());
   } 
 } 

   else {
     header("Location: ../index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT data using PHP</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
   <h3>Search Results:</h3>

   <?php
        if (empty($results)) {
            echo "<div>";
            echo "<p>There were no results.</p>";
            echo "</div>";
        }
        else {
        foreach ($results as $row) {
            echo "<br>";
            echo 'My username is <b>"' . htmlspecialchars($row["username"]) . '".</b>';
            echo "<br>";
            echo 'The comment posted was <b>"' . htmlspecialchars($row["comment_text"]) . '".</b>';
            echo "<br>";
            echo 'My account was created on <b>"' . htmlspecialchars($row["created_at"]) . '".</b>';
            echo "<br>";
        }
    }
   ?>
</body>
</html>