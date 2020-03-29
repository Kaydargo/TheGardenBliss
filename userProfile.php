<?php

include('includes/database.php');
include("loginServ.php");

$currentUser = $_SESSION['userID'];
if (!isset($_SESSION['userID'])) {
    header('Location: login.php');
}
require('includes/database.php');

$queryUser = "SELECT * FROM users WHERE userID = $currentUser";
$statement2 = $conn->prepare($queryUser);
$statement2->execute();
$users = $statement2->fetchAll();
$statement2->closeCursor();

$query = "SELECT * FROM plant LEFT JOIN userfavourites ON plant.plantID = userfavourites.plantID WHERE userID = $currentUser";
$statement5 = $conn->prepare($query);
$statement5->execute();
$queries = $statement5->fetchAll();
$statement5->closeCursor();
?>
<?php

if (!isset($_SESSION['userID'])) {
    include('includes/header.php');
} else {
    include('includes/header2.php');
}
?>
<!DOCTYPE html>

<head>
    <title>User Profile</title>
    <link href="css/graham.scss" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/logo-w-text.png" />
</head>
<body>
    <div class="container"><br><br><br><br><br><br>
        <?php foreach ($users as $user) : ?>
            <?php echo "<img class='image2 img-fluid' src='images/" . $user['userPic'] . "' />"; ?>
            <h3 class="name"><?php echo $user['username']; ?></h3>
            <p><?php echo $user['firstName']; ?> <?php echo $user['lastName']; ?></p>
            <p><?php echo $user['email']; ?></p>
            <button class="btn btn-primary"><a class="edit" href="editUser_form.php">Edit profile</a></button>            
    </div>
<?php endforeach;  ?>
<br><br>
<div class="container">
<h3 class="plantName">Favourited plants</h3>
<br>
  <div class="row">
    <?php
    foreach ($queries as $query2) :
      echo ' <div class="col-md-4 col-xs-6">
                <img src="images/' . $query2["plantImage"] . '" class="img-responsive img-thumbnail">
                <h4 style="text-align: center;"><a>' . $query2["plantName"] . ' </a></h4>
            </div>';
    ?>
    <?php endforeach; ?>
  </div>
</div>
<br>
</div>
<?php include_once 'includes/footer.php' ?>
</body>

</html>