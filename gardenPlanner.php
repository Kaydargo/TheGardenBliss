<?php
require('includes/database.php');

    $queryPlant = "SELECT * FROM plant WHERE plantID = plantID"; 
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Drag&Drop Garden</title>
  <?php
    include('includes/header.php');
        ?>
    </head>
    <body>
<br><br>
    <div class="container">
  <h2>Garden Dimensions</h2>
  <!-- <form action="#">
    <div class="form-group">
      <label for="gardenWidth">Garden Width:</label>
      <input type="text" class="form-control" id="gWidth" placeholder="Enter width of garden" pattern="[0-9]+" name="width" min="0" max="1000">
    </div>
    <div class="form-group">
      <label for="gardenHeight">Garden Height:</label>
      <input type="text" class="form-control" id="gHeight" placeholder="Enter height of garden" pattern="[0-9]+" name="height" min="0" max="1000">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div> -->
  <br>

  <!--Garden Planner -->
  <div class="container-fluid planner">
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
                  <td><?php echo "<img class='plants' src='images/".$plant['plantIcon']."' />"; ?>
                </div>
                <?php endforeach; ?>
            </table>
      </div>

        <div class="col-lg-9 gardenPlanner">
           <!--<div>
              <div id="box"></div>
            </div>
            <div id="results"></div>
        </div>-->

        </div>
  </div>
  </div>

<!--Garden Planner End -->

        <!--<script src="js/main.js"></script>-->
        <script src="js/dragDrop.js"></script>
    </body>
</html>