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

$queryInfo = "SELECT * FROM plantinginfo WHERE plantID = $plant_id";
$statement2 = $conn->prepare($queryInfo);
$statement2->execute();
$plantsInfo = $statement2->fetchAll();
$statement2->closeCursor();
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
      <div class="col-sm-6">
        <?php echo "<img class='image1 img-fluid' src='images/".$plant['plantImage']. "' />"; ?>
      </div>
      <div class="col-sm-6">
          <h3 class="plantName"><?php echo $plant['plantName']; ?></h3>
          <p><?php echo $plant['description']; ?></p>
      </div> 
   </div> 
</div>
<br><br>
<div class="container"> 
<h3 class="plantName">Planting Information</h3>
<br>
<!--Display harvest table -->
<div style="overflow-x:auto;">
<table class="table">
  <thead>
    <tr>
    <th scope="col">Month</th>
      <th scope="col">Jan</th>
      <th scope="col">Feb</th>
      <th scope="col">Mar</th>
      <th scope="col">Apr</th>
      <th scope="col">May</th>
      <th scope="col">Jun</th>
      <th scope="col">Jul</th>
      <th scope="col">Aug</th>
      <th scope="col">Sep</th>
      <th scope="col">Oct</th>
      <th scope="col">Nov</th>
      <th scope="col">Dec</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Plant</th>
      <script id="season" data-name="<?php echo $plant['season'];?>" src="table.js"></script>
      
      <?php for($i=0; $i <=11; $i++){   
    echo "<td id=".$i."></td>";  
   } ?>

    </tr>
    <tr>
      <th scope="row">Harvest</th>
      <script id="harvest" data-name="<?php echo $plant['Harvesting'];?>" src="table.js"></script>
      <?php for($j=12; $j <=23; $j++){
        echo "<td id=".$j."></td>";
      } ?>
    </tr>
  </tbody>
</table>
</div><br>
<!-- Harvest table end -->
<div class="row display-flex">
  <div class="col-sm"><h4 class="info">Soil</h4>
  <?php
  if($plant['soil'] == "Sandy")
  {
    echo "<img class='icons img-fluid' src='icons/soil_2.png'>";
  }
  else
  {
    echo "<img class='icons img-fluid' src='icons/soil_2.png'>";
  }
  ?>
  <p class="titles"><?php echo $plant['soil']; ?></p>
  </div>
  <div class="col-sm"><h4 class="info">Placement</h4>
  <?php
  if($plant['placement'] == "Shade")
  {
    echo "<img class='icons img-fluid' src='icons/shade.png'>";
  }
  else
  {
    echo "<img class='icons img-fluid' src='icons/sun_2.png'>";
  }
  ?>
  <p class="titles"><?php echo $plant['placement']; ?></p>
  </div>
  <div class="col-sm"><h4 class="info">Depth</h4>
  <img class="icons img-fluid" src='icons/depth.png'>
  <p class="titles"><?php echo $plant['depth']; ?></p>
  </div>
  <div class="col-sm"><h4 class="info">Distance</h4>
  <img class="icons img-fluid" src='icons/distance.png'>
  <p class="titles"><?php echo $plant['distance']; ?></p>
  </div>
</div> 
</div>

<br><br><br>
<div class="container-fluid"> 
<div class="container pad"> 
    <?php foreach ($plantsInfo as $plantInfo) : ?>
   <div class="row row1"> 
   <div class="col-sm-6">
          <h3 class="plantName">How to plant</h3>
          <ol class="list">
    <li><?php echo $plantInfo['step1']; ?></li>
    <li><?php echo $plantInfo['step2']; ?></li>
    <li><?php echo $plantInfo['step3']; ?></li>
    <li><?php echo $plantInfo['step4']; ?></li>
  </ol>
      </div> 
      <div class="col-sm-6">
        <?php echo "<img class='image1' src='images/plant2.jpg".$plantInfo['infoImage']. "' />"; ?>
      </div>
   </div> 
    </div> 
</div>
<br><br>
<div class="container"> 
<div class="row display-flex">
  <div class="col-sm-4"><h4 class="info">Watering</h4>
  <p class="titles"><?php echo $plant['watering']; ?></p>
  </div>
  <div class="col-sm-4 vert"><h4 class="info">Aftercare</h4>
  <p><?php echo $plantInfo['aftercare'] ?></p>
  </div>
  <div class="col-sm-4 vert"><h4 class="info">Problems</h4>
  <p><?php echo $plantInfo['problems'] ?></p>
  </div>
</div> 
</div>
<br><br>
<?php endforeach; ?>
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
  <script src="js/table.js"></script>
    
  <?php
    include('includes/footer3.php');
        ?>
</html>
