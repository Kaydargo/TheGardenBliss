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
  <link rel="stylesheet" href="css/test.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/drag2.js"></script>
  <title>Drag&Drop Garden</title>
  <?php
    include('includes/header.php');
        ?>
    </head>
    <body>
<br><br><br><br><br>
    <div class="container">
<div class="container-fluid planner">
<div class="row">
        <div class="col-lg-3">
        <br><br>
        <table class ="table">
                <tr class="table-primary">
                    <th>Name</th>
                    <th>Plant</th>
                </tr>
                <?php foreach ($plants as $plant) : ?>
                <tr>  
                <div style="width=200px">
                    <td><?php echo $plant['plantName']; ?></td>
                  <td><?php echo "<img class='plants draggable' src='images/".$plant['plantIcon']."' />"; ?>
                </div>
                <?php endforeach; ?>
            </table>
      </div><br>
      <div class="col-lg-9 gardenPlanner" id="droppable">
        </div>
  </div>
  </div>
                </div>
