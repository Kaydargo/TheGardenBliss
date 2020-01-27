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
  <?php
$plantingSeason = $plant['season'];
switch ($plantingSeason) {
    case "January":
        echo 
        "Your favorite color is red!";
        break;
    case "Feburary":
        echo "Your favorite color is blue!";
        break;
    case "March":
        echo "Your favorite color is green!";
        break;
    case "April":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
         <tr>
      <th scope="row">Plant</th>
      <td id="pJan"></td>
      <td id="pFeb"></td>
      <td id="pMar"></td>
      <td id="pApr"></td>
      <td id="pMay"></td>
      <td id="pJun"></td>
      <td id="pJul"></td>
      <td id="pAug"></td>
      <td id="pSep"></td>
      <td id="pOct"></td>
      <td id="pNov"></td>
      <td id="pDec"></td>    
    </tr>
    <tr>
      <th scope="row">Harvest</th>
      <td id="hJan"></td>
      <td id="hFeb"></td>
      <td id="hMar"></td>
      <td id="hApr"></td>
      <td id="hMay"></td>
      <td id="hJun"></td>
      <td id="hJul"></td>
      <td id="hAug"></td>
      <td id="hSep"></td>
      <td id="hOct"></td>
      <td id="hNov"></td>
      <td id="hDec"></td>
    </tr>
  </tbody>
</table>
</div>
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
<div class="container-fluid ctnCol"> 
<div class="container pad"> 
    <?php foreach ($plantsInfo as $plantInfo) : ?>
   <div class="row row1"> 
   <div class="col-sm-6">
          <h3 class="howTo">How to plant</h3>
          <p class="para"><strong>Step 1: </strong><?php echo $plantInfo['step1']; ?></p>
          <p class="para"><strong>Step 2: </strong><?php echo $plantInfo['step2']; ?></p>
          <p class="para"><strong>Step 3: </strong><?php echo $plantInfo['step3']; ?></p>
          <p class="para"><strong>Step 4: </strong><?php echo $plantInfo['step4']; ?></p>
      </div> 
      <div class="col-sm-6">
        <?php echo "<img class='image1' src='images/".$plantInfo['infoImage']. "' />"; ?>
      </div>
   </div> 
    </div> 
</div>
<br><br>
<div class="container"> 
<h3 class="plantName">Care</h3>
<br>
<div class="row display-flex">
  <div class="col-sm-4"><h4 class="info">Watering</h4>
  <img class="icons img-fluid" src='icons/watering_2.png'>
  <p class="titles"><?php echo $plant['watering']; ?></p>
  </div>
  <div class="col-sm-4"><h4 class="info">Aftercare</h4>
  <p><?php echo $plantInfo['aftercare'] ?></p>
  </div>
  <div class="col-sm-4"><h4 class="info">Problems</h4>
  <p><?php echo $plantInfo['problems'] ?></p>
  </div>
</div> 
</div>
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
</html>
