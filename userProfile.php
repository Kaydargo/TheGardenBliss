<?php

include('includes/database.php');
include("loginServ.php");

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
     <?php

if(!isset($_SESSION['userID'])){
    include('includes/header.php');
}
else{
    include('includes/header2.php');
}
?> 
<!DOCTYPE html>
<head>
      <title>User Profile</title>
</head>
<body> 
<div class="container"><br><br><br><br><br><br>
<?php foreach ($users as $user) :?>
    <h1>Welcome, <?php echo $user['username']; ?></h1>
    <p><a href="editUser_form.php" style="color: green;">Edit profile</a></p>   
    </div>
<?php endforeach;  ?>
<?php include_once 'includes/footer.php'?>
</body>
</html>