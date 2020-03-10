<?php
require('includes/database.php');
include('includes/functions.php');
    $queryPlant = "SELECT * FROM plant WHERE plantID = plantID"; 
    $statement1 = $conn->prepare($queryPlant);
    $statement1->execute();
    $plants = $statement1->fetchAll();
    $statement1->closeCursor();
     ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <style>
  #vegetables { float: left; width: 65%; min-height: 12em; }
  .vegetables.custom-state-active { background: #eee; }
  .vegetables div div { float: left; width: 96px; padding: 0.4em; margin: 0 0.4em 0.4em 0; text-adiv divgn: center; }
  .vegetables div div h5 { margin: 0 0 0.4em; cursor: move; }
  .vegetables div div a { float: right; }
  .vegetables div div a.ui-icon-zoomin { float: left; }
  .vegetables div div img { width: 100%; cursor: move; }
 
  #bin { float: right; width: 32%; min-height: 18em; padding: 1%; }
  #bin h4 { line-height: 16px; margin: 0 0 0.4em; }
  #bin h4 .ui-icon { float: left; }
  #bin .vegetables h5 { display: none; }
  </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/drag.css">
  <link rel="stylesheet" href="css/graham.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/drag-drop.js"></script>
</head>
<body>
 <br><br><br><br>
 <div class="container">
<div class="ui-widget ui-helper-clearfix garden">
 
<div class=" text-center my-3 planner">
  <div id="plantSlider" class="carousel slide w-100" data-ride="carousel" data-interval="false">
    <div class="carousel-inner w-100" role="listbox">
      <div id="vegetables" class="vegetables ui-helper-reset ui-helper-clearfix ">  
      <div class="carousel-item row no-gutters active">    
          <?php $counter1 = 0; ?>
            <?php foreach ($vegGardens as $vegGarden): ?>
              <?php
              $counter1++; //increase counter number
              if ($counter1 > 4) {
              break;
              }
              ?>
                <div class="col-3 float-left ui-widget-content ui-corner-tr plant"> 
                <h5 class="ui-widget-header"><?php echo $vegGarden['plantName']?></h5> 
                  <?= ($vegGarden['plantIcon'] <> " " ? "<img style='width:100px; margin-top:10px;' src='images/{$vegGarden['plantIcon']}'/>" : "") ?>
                  <a href="<?php 'images/'.$vegGarden1['plantIcon']?>" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
                 <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Delete image</a>
                </div>
               
            <?php endforeach; ?>
              </div>

              <div class="carousel-item row no-gutters">
            <?php $counter1 = 0; ?>
            <?php foreach ($vegGardens1 as $vegGarden1): ?>
              <?php
              $counter1++; //increase counter number
              if ($counter1 > 4) {
              break;
              }
              ?>
                <div class="col-3 float-left ui-widget-content ui-corner-tr plant"> 
                <h5 class="ui-widget-header"><?php echo $vegGarden1['plantName']?></h5> 
                  <?= ($vegGarden1['plantIcon'] <> " " ? "<img style='width:100px; margin-top:10px;' src='images/{$vegGarden1['plantIcon']}'/>" : "") ?>
                  <a href="<?php 'images/'.$vegGarden1['plantIcon']?>" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
                <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Delete image</a>
                </div>
            <?php endforeach; ?>
            </div>
      </div>
    </div>
 
    <a class="carousel-control-prev" href="#plantSlider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#plantSlider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> 
  </div>
</div>



 <!-- Draggable -->
<!-- <ul id="vegetables" class="vegetables ui-helper-reset ui-helper-clearfix">

  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">High Tatras</h5>
    <img src="images/high_tatras_min.jpg" alt="The peaks of High Tatras" width="96" height="72">
    <a href="images/high_tatras.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
    <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Delete image</a>
  </li>

</ul> -->

 <!-- Droppable grid -->
<div id="gardenPlanner" class="col-lg-10 ui-widget-content ui-state-default gardenPlanner">
</div>

 <!-- Droppable Trash -->
<div id="bin" class="col-lg-2 ui-widget-content ui-state-default">
  <h4 class="ui-widget-header"><span class="ui-icon ui-icon-trash">Bin</span> Bin</h4>
</div>
 
</div>
 

            </div>
<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
 <!-- <script src="js/jquery-migrate-3.0.0.min.js"></script> -->


		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/retina-1.1.0.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/garden-size.js"></script>
        <script src="js/weatherBit.js"></script>
        <script src="js/main.js"></script>
        <script src="js/scripts.js"></script> 
</body>
</html>


<!-- 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/test.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
