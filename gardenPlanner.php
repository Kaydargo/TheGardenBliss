<?php
require('includes/database.php');

    $queryPlant = "SELECT * FROM plant WHERE plantID = plantID LIMIT 3"; 
    $statement1 = $conn->prepare($queryPlant);
    $statement1->execute();
    $plants = $statement1->fetchAll();
    $statement1->closeCursor();
     ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/drag.css">
  <script src="bootstrap.bundle.min.js / bootstrap.bundle.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <title>Drag&Drop Garden</title>
  <?php
    include('includes/header.php');
    include('includes/functions.php');
        ?>
    </head>
    <body>
<br><br><br>
<div class="container">
  <h2>Garden Dimensions</h2>
  <div class="row">

<h2>Select garden size:</h2><br>
 <form role="form">
    <div class="form-group">
    <select class="form-control" id="gardenWidthDrop">
    <option class="dropdown-item" value="1" >1</option> 
    <option class="dropdown-item" value="2" >2</option>
    <option class="dropdown-item" value="3" >3</option>
    <option class="dropdown-item" value="4" >4</option>
    <option class="dropdown-item" value="5" >5</option>
    <option class="dropdown-item" value="6" selected>6</option>
    <option class="dropdown-item" value="7" >7</option>
    <option class="dropdown-item" value="8" >8</option>
    <option class="dropdown-item" value="9" >9</option>
    <option class="dropdown-item" value="10" >10</option>
    <option class="dropdown-item" value="11" >11</option>
    <option class="dropdown-item" value="12" >12</option>
    </select>
    </div>

    <div class="form-group">
    <select class="form-control" id="gardenHeighDrop">
    <option class="dropdown-item" value="1" >1</option>
    <option class="dropdown-item" value="2" >2</option>
    <option class="dropdown-item" value="3" selected>3</option>
    <option class="dropdown-item" value="4" >4</option>
    <option class="dropdown-item" value="5" >5</option>
    </select>

    </div>
  <br>
  <button type="button" class="btn btn-primary gDimBtn" >Create Grid</button><!-- onClick="gridDimensions()" -->
</form>
</div><br><br>
</div>
<!-- Vegetables Slider -->
<div class="container text-center my-3 planner">
    <div id="plantSlider" class="carousel slide w-100" data-ride="carousel" data-interval="false">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active">      
            <?php $counter1 = 0; ?><?php foreach ($vegetables1 as $veg1): ?>
            <?php
            $counter1++; //increase counter number
            if ($counter1 > 4) {
            break;
            }?>
            <div class="col-3 float-left">  
            <?= ($veg1['plantIcon'] <> " " ? "<img draggable='true' class='plants' style='width:100px; margin-top:10px;' src='images/{$veg1['plantIcon']}'/>" : "") ?>
            </div>
            <?php endforeach; ?>
            </div> 
            
            <div class="carousel-item row no-gutters">
            <?php $counter1 = 0; ?>
            <?php foreach ($vegetables1 as $veg1): ?>
            <?php
            $counter1++; //increase counter number
            if ($counter1 > 4) {
            break;
            }
            ?>  
            <div class="col-3 float-left"> 
            <?= ($veg1['plantIcon'] <> " " ? "<img draggable='true' class='plants' style='width:100px; margin-top:10px;' src='images/{$veg1['plantIcon']}'/>" : "") ?>                                                            
            </div>  
            <?php endforeach; ?> 
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
<!--</div>-->

<!-- Slider END -->
  <br>
  <!--Garden Planner -->
  <!--<div class="container-fluid planner">
    <div class="row">
        <div class="col-lg-3">
        <br><br>
        <table class ="table table-responsive">
                <tr class="table-primary">
                    <th>Name</th>
                    <th>Plant</th>
                </tr>
                <?php foreach ($plants as $plant) : ?>
                <tr>  
                <div style="width=200px">
                    <td><?php echo $plant['plantName']; ?></td>
                  <td><?php echo "<img class='plants ui-widget-content'  draggable='true' src='images/".$plant['plantIcon']."' />"; ?>
                </div>
                <?php endforeach; ?>
            </table>
      </div>
-->
        <div class="col-lg-12 ui-widget-header gardenPlanner">
           <!--<div>
              <div id="box"></div>
            </div>
            <div id="results"></div>
        </div>-->

        </div>
  </div>
  <!--Garden Planner End -->
    <!-- Print page -->
    <i class="fa fa-print"></i><button type="button" class="btn" onClick="printPageAppear()"> Print Page</button>
  <!-- Weather -->
  <?php  include('includes/weather.php'); ?>
  </div>

  <?php  include('includes/footer.php'); ?>

        <script src="js/drag-drop.js"></script>
        <script src="js/garden-size.js"></script>
        <script src="js/weather-api.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>