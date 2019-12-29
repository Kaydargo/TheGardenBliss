<!DOCTYPE html>
<?php
require('includes/database.php');

    $queryUser = "SELECT * FROM users WHERE userID = userID"; 
    $statement2 = $conn->prepare($queryUser);
    $statement2->execute();
    $users = $statement2->fetchAll();
    $statement2->closeCursor();
     ?>
<head>
      <title>User Profile</title>
</head>
<body> 
    <h1>User Profile</h1>   
</body>
</html>