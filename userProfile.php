<?php
session_start();
$currentUser = $_SESSION['userID'];
if(!isset($_SESSION['userID'])){
    header('Location: login.php');
}
require('includes/database.php');

    $queryUser = "SELECT * FROM users WHERE userID = $currentUser"; 
    $statement2 = $conn->prepare($queryUser);
    $statement2->execute();
    $users = $statement2->fetchAll();
    $statement2->closeCursor();
     ?>
<!DOCTYPE html>
<head>
      <title>User Profile</title>
</head>
<body> 
<?php include_once 'includes/header.php'?>
<div class="container"><br><br><br><br><br><br>
<?php foreach ($users as $user) :?>
    <h1>Welcome, <?php echo $user['username']; ?></h1>
    <p><a href="editUser_form.php" style="color: green;">Edit profile</a></p>   
    </div>
<?php endforeach;  ?>
<?php include_once 'includes/footer3.php'?>
</body>
</html>