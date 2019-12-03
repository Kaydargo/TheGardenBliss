<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include('includes/database.php');

//Form Query
$queryPlant = "SELECT * FROM plant WHERE plantID = '1'";
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
<div class="container"> 
   <div class="row">
<table class ="table table-responsive">
                <tr class="table-primary">
                    <th>Soil</th>
                    <th>Placement</th>
                    <th>Watering</th>
                    <th>Distance</th>
                    <th>Depth</th>
                    <th>Type</th>
                </tr>
                <tr>  
                    <td><?php echo $plant['soil']; ?></td>
                    <td><?php echo $plant['placement']; ?></td>
                    <td><?php echo $plant['watering']; ?></td>
                    <td><?php echo $plant['distance']; ?></td>
                    <td><?php echo $plant['depth']; ?></td>
                    <td><?php echo $plant['type']; ?></td>
                </tr>
                
            </table>
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
