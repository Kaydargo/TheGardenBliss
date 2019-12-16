<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include('includes/database.php');

//Form Query
$plant_id = $_GET['plantID'];
$queryPlant = "SELECT * FROM plant WHERE plantID = $plant_id";
$statement1 = $conn->prepare($queryPlant);
$statement1->execute();
$plants = $statement1->fetchAll();
$statement1->closeCursor();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link href="css/graham.css" rel="stylesheet">
    <?php
    include('includes/header.php');
        ?>
    <body>
        <br><br><br><br><br>
    <div class="container"> 
    <?php foreach ($plants as $plant) : ?>
   <div class="row row1"> 
      <div class="col img-responsive">
        <?php echo "<img class='image1' src='images/".$plant['plantImage']. "' />"; ?>
      </div>
      <div class="col">
          <h3 class="plantName"><?php echo $plant['plantName']; ?></h3>
          <p><?php echo $plant['description']; ?></p>
      </div> 
   </div> 
</div>
<br><br>
<div class="container"> 
<h3 class="plantName">Planting Information</h3>
<br>
<div class="row">
  <div class="col"><h4 class="info">Soil</h4>
  <?php
  if($plant['soil'] == "Sandy")
  {
    echo "<img class='icons' src='icons/soil_2.png'>";
  }
  else
  {
    echo "<img class='icons' src='icons/soil_2.png'>";
  }
  ?>
  <p class="titles"><?php echo $plant['soil']; ?></p>
  </div>
  <div class="col"><h4 class="info">Placement</h4>
  <?php
  if($plant['placement'] == "Shade")
  {
    echo "<img class='icons' src='icons/shade.png'>";
  }
  else
  {
    echo "<img class='icons' src='icons/sun_2.png'>";
  }
  ?>
  <p class="titles"><?php echo $plant['placement']; ?></p>
  </div>
  <div class="col"><h4 class="info">Depth</h4>
  <img class="icons" src='icons/depth.png'>
  <p class="titles"><?php echo $plant['depth']; ?></p>
  </div>
  <div class="col"><h4 class="info">Distance</h4>
  <img class="icons" src='icons/distance.png'>
  <p class="titles"><?php echo $plant['distance']; ?></p>
  </div>
</div> 
</div>
<?php endforeach; ?>
    </body>

    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
</html>
