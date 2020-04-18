<?php
    ob_start();
?>
<!DOCTYPE html>

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Profile</title>
    <link href="css/graham.scss" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/logo-w-text.png" />
</head>
<body>
<?php

include('includes/database.php');
include("loginServ.php");

$currentUser = $_SESSION['userID'];
if (!isset($_SESSION['userID'])) {
    header('Location: login.php');
}

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

    <div class="container"><br><br><br><br><br><br>
    <div class="colUser">
        <?php foreach ($users as $user) : ?>
        <?php if(empty($user['userPic'])) {
         echo "<img class='image2 img-fluid' src='images/userProfile.png'/>";
            }
        else {
            echo "<img class='image2 img-fluid' src='images/" . $user['userPic'] . "' />";
        }?>
            <h3 class="name"><?php echo $user['username']; ?></h3>
            <p><?php echo $user['firstName']; ?> <?php echo $user['lastName']; ?></p>
            <p><?php echo $user['email']; ?></p>
            <button class="btn btn-primary"><a class="edit" href="editUser_form.php">Edit profile</a></button>            
    </div>
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
<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/scripts.js"></script>
    
<?php include('includes/footer.php') ?>



</body>

</html>
<?php 
  ob_end_flush();
  ?>