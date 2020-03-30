<?php
require('includes/database.php');
include("loginServ.php");
include('includes/functions.php');
    $queryPlant = "SELECT * FROM plant WHERE type = 'vegetable' LIMIT 10"; 
    $statement1 = $conn->prepare($queryPlant);
    $statement1->execute();
    $plants = $statement1->fetchAll();
    $statement1->closeCursor();
     ?>
<title>Garden Planner</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/drag.css">
  <link rel="stylesheet" href="css/graham.scss">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/drag-drop.js"></script>
  <link rel="icon" type="image/x-icon" href="images/logo-w-text.png" />
</head>
<title>Drag&Drop Garden</title>
  <?php
    include('includes/functions.php');
        ?>
        <?php

if(!isset($_SESSION['userID'])){
    include('includes/header.php');
}
else{
    include('includes/header2.php');
}
?> 
<body>
<div class="top-content" style="width= 100%;">
  <div class="container">
    <div class="row">
      <div class='bar'>
        <div class="col-md-8 offset-md-2 text">
          <h1 class="wow fadeInLeftBig">Plan your ideal garden</h1>
        <div class="description wow fadeInLeftBig">
        <p>We walk you through factors that can affect how your garden will grow — sunlight, shade, soil - and the balance between fruits, shrubs, flowers and vegetables
        </p>
      </div>
    </div>
  </div>
</div>
                
            </div>            
        </div>
<br><br>
<div class="container">
<h3 class="plantName">Garden Planner </h3><br>
  <div class="row" >
<p>Planning and creating a new garden design can give your home a boost. Our garden planner makes it easy to plan your dream garden, it allows you to plan the layout and content of your garden easily. It also gives you the flexibility to create the best design for your  garden. with the planner you can easily add various  vegetables and move them around your allotted garden to get the perfect layout.
</p>
<!-- Feature Cards -->
<section class="d-flex bg-light" id="feature-cards">
    <div class="container d-flex justify-content-center">
        <div class="row align-items-center justify-content-center" style="background-color: #f2f2f2;">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mx-auto text-center">
                                    <img src="icons/select.png" class="plannerIcons" alt="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                        <h3>Select</h3><hr>
                                        <p class="text-secondary">Use the width and breadth grid provided to create the dimension that you want for your garden.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mx-auto text-center">
                                    <img src="icons/design.png" class="plannerIcons" alt="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                        <h3>Design</h3><hr>
                                        <p class="text-secondary">Pick from the various vegetables, drag and drop it to anywhere you want on your alloted garden.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mx-auto text-center">
                                    <img src="icons/save.png" class="plannerIcons" alt="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                        <h3>Save</h3><hr>
                                        <p class="text-secondary">fill up your garden with the vegetables and save on your profile or print it out if you are not login.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</section>

<div class="container">

<form>
  <!-- <div class="row"> -->
    <div class="col">
    <select class="form-control" id="gardenWidthDrop">
    <?php for($i=4; $i<=12; $i++){
      echo '<option class="dropdown-item" value='.$i.'>'.$i." FT".'</option> ';
    }?>
    </select>
      <label>Width of Garden </label>
    </div>
    <div class="col">
    <select class="form-control" id="gardenHeighDrop">
    <?Php for ($j=4; $j<=10; $j++){
      echo '<option class="dropdown-item" value='.$j.'>'.$j." FT".'</option> ';
    } ?>
    </select>
      <label>Height of Garden </label>
    </div>
  </div>
  <button type="button" class="btn btn-primary gDimBtn" >Create Grid</button><!-- onClick="gridDimensions()" -->
</form>

<br>
    <div class="vegetableGarden ui-helper-reset ">

    <?php foreach ($plants as $plant): ?>
    <li class='veg' >
    <h5><?php echo $plant['plantName']; ?></h5>
    <?= ($plant['plantIcon'] <> " " ? "<img id='{$plant['plantID']}' style='width: 80px; height:80px;' src='images/{$plant['plantIcon']}'/>" : "") ?>
    </li>
<?php endforeach; ?>
    </div>
    </div>
 </div>

    <div class="container">
    <div class="row">

    <div class="table-responsive col-sm-10">
    <div class="garden ui-helper-reset ">
        <table cellpadding="0" cellspacing="0" border="1">
        <tr>
                        <td><div id="plot1" class="drop"></div></td>
                        <td><div id="plot2" class="drop"></div></td>
                        <td><div id="plot3" class="drop"></div></td>
                        <td><div id="plot4" class="drop"></div></td>
                        <td><div id="plot5" class="drop"></div></td>
                        <td><div id="plot6" class="drop"></div></td>
                        <td><div id="plot7" class="drop"></div></td>
                        <td><div id="plot24" class="drop"></div></td>
                </tr>
                <tr>
                        <td><div id="plot8" class="drop"></div></td>
                        <td><div id="plot9" class="drop"></div></td>
                        <td><div id="plot10" class="drop"></div></td>
                        <td><div id="plot11" class="drop"></div></td>
                        <td><div id="plot12" class="drop"></div></td>
                        <td><div id="plot13" class="drop"></div></td>
                        <td><div id="plot14" class="drop"></div></td>
                        <td><div id="plot23" class="drop"></div></td>
                </tr>
                <tr>
                        <td><div id="plot15" class="drop"></div></td>
                        <td><div id="plot16" class="drop"></div></td>
                        <td><div id="plot17" class="drop"></div></td>
                        <td><div id="plot18" class="drop"></div></td>
                        <td><div id="plot19" class="drop"></div></td>
                        <td><div id="plot20" class="drop"></div></td>
                        <td><div id="plot21" class="drop"></div></td>
                        <td><div id="plot22" class="drop"></div></td>
                </tr>
        </table>
        </div>
        </div>
    <div id="compost" class="ui-widget-content ui-state-default col-sm-2">
        <h4 class="ui-widget-header"><span class="ui-icon ui-icon-trash">Compost</span>Compost</h4>
    </div>    
  
  </div>
  <i class="fa fa-print"></i><button type="button" class="btn" onClick="printPageAppear()"> Print Page</button>
</div>


    <!-- <div id="gardenPlanner" class="garden ui-helper-reset gardenPlanner"> -->
</div>

  <!-- Weather -->
   
<?php  include('includes/weather.php'); ?>
  </div>
                </div>
<br>
  <?php  include('includes/footer.php'); ?>

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

    <script src="js/garden-size.js"></script>
</body>
</html>