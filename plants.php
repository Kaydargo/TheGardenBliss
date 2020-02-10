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
  
        
        
</head>

<body>
<?php
  include('includes/header.php');
  include('includes/database.php');  
  ?>
 
<?php
//Selects all images, their id and userid with the tag animated
        require('includes/functions.php');
        ?>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
        <!-- Page Content -->
        <div class="container" style="text-align: center;">
        <h1 class="galhead" >Our Range of Plants</h1>
        <br><br>
        
        <p>Click on a plant and you will be taking to a page full of growing guides and useful information about how to grow the plant, how to care for the plant, problem and disease that can affect the plant and when to harvest.</p>
<br><br>
<br><br><br> 







<h3>Vegetables & Herbs</h3>
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">
      <div class="row">
      <?php foreach ($vegetables as $veg): ?>
      <div class="col-md-4 clearfix d-md-block d-none">
    <div class="card mb-2">
      <?php $counter = 0; ?>
        <?php 
          $counter++;
    if ($counter > 3){
    break;
    }?>
            <?= ($veg['plantImage'] <> " " ? "<img class='card-img-top' src='images/{$veg['plantImage']}'/>" : "") ?>
            <div class="card-body">
              <h4 class="card-title"> <?php echo ($veg['plantName']); ?></h4>
              <p class="card-text"><?php echo ($veg['description']);?></p>
              <a href="plantInfo.php?plantID=<?php echo ($veg['plantID']); ?>" class="btn btn-primary">Button</a>
            </div>
           
          </div>
        </div>
        <?php endforeach; ?> 
      </div>

    </div>
    <!--/.First slide-->


    <!--Second slide-->
   <div class="carousel-item">

      <div class="row">
      <?php foreach ($vegetables1 as $veg1): ?>
      <div class="col-md-4 clearfix d-md-block">
    <div class="card mb-2">
      <?php $counter = 0; ?>
      
        <?php 
          $counter++;
    if ($counter > 3){
    break;
    }?>
            <?= ($veg1['plantImage'] <> " " ? "<img class='card-img-top' src='images/{$veg1['plantImage']}'/>" : "") ?>
            <div class="card-body">
              <h4 class="card-title"><a href="plantInfo.php?plantID=<?php echo ($veg1['plantID']); ?>"> <?php echo ($veg1['plantName']); ?></a></h4>
              <p class="card-text"><?php echo ($veg1['description']);?></p>
              <a class="btn btn-primary">Button</a>
            </div>
           
          </div>
        </div>
        <?php endforeach; ?> 
        </div>
      </div>

  
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item">

<div class="row">
<?php foreach ($vegetables2 as $veg2): ?>
<div class="col-md-4 clearfix d-md-block">
<div class="card mb-2">
<?php $counter = 0; ?>

  <?php 
    $counter++;
if ($counter > 3){
break;
}?>
      <?= ($veg2['plantImage'] <> " " ? "<img class='card-img-top' src='images/{$veg2['plantImage']}'/>" : "") ?>
      <div class="card-body">
        <h4 class="card-title"><a href="plantInfo.php?plantID=<?php echo ($veg2['plantID']); ?>"> <?php echo ($veg2['plantName']); ?></a></h4>
        <p class="card-text"><?php echo ($veg2['description']);?></p>
        <a class="btn btn-primary">Button</a>
      </div>
     
    </div>
  </div>
  <?php endforeach; ?> 
  </div>
</div>

</div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->



<!--/.Carousel Wrapper-->





<br><br><br>
<br> <br>






<h3>Fruits</h3>
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">
      <div class="row">
      <?php foreach ($fruits as $fruit): ?>
      <div class="col-md-4 clearfix d-md-block d-none">
    <div class="card mb-2">
      <?php $counter = 0; ?>
        <?php 
          $counter++;
    if ($counter > 3){
    break;
    }?>
            <?= ($fruit['plantImage'] <> " " ? "<img class='card-img-top' src='images/{$fruit['plantImage']}'/>" : "") ?>
            <div class="card-body">
              <h4 class="card-title"><a href="plantInfo.php?plantID=<?php echo ($fruit['plantID']); ?>"> <?php echo ($fruit['plantName']); ?></a></h4>
              <p class="card-text"><?php echo ($fruit['description']);?></p>
              <a class="btn btn-primary">Button</a>
            </div>
           
          </div>
        </div>
        <?php endforeach; ?> 
      </div>

    </div>
    <!--/.First slide-->


    <!--Second slide-->
   <div class="carousel-item">

      <div class="row">
      <?php foreach ($fruits1 as $fruit1): ?>
      <div class="col-md-4 clearfix d-md-block">
    <div class="card mb-2">
      <?php $counter = 0; ?>
      
        <?php 
          $counter++;
    if ($counter > 3){
    break;
    }?>
            <?= ($fruit1['plantImage'] <> " " ? "<img class='card-img-top' src='images/{$fruit1['plantImage']}'/>" : "") ?>
            <div class="card-body">
              <h4 class="card-title"><a href="plantInfo.php?plantID=<?php echo ($fruit1['plantID']); ?>"> <?php echo ($fruit1['plantName']); ?></a></h4>
              <p class="card-text"><?php echo ($fruit1['description']);?></p>
              <a class="btn btn-primary">Button</a>
            </div>
           
          </div>
        </div>
        <?php endforeach; ?> 
        </div>
      </div>

  
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item">

<div class="row">
<?php foreach ($fruits2 as $fruit2): ?>
<div class="col-md-4 clearfix d-md-block">
<div class="card mb-2">
<?php $counter = 0; ?>

  <?php 
    $counter++;
if ($counter > 3){
break;
}?>
      <?= ($fruit2['plantImage'] <> " " ? "<img class='card-img-top' src='images/{$fruit2['plantImage']}'/>" : "") ?>
      <div class="card-body">
        <h4 class="card-title"><a href="plantInfo.php?plantID=<?php echo ($fruit2['plantID']); ?>"> <?php echo ($fruit2['plantName']); ?></a></h4>
        <p class="card-text"><?php echo ($fruit2['description']);?></p>
        <a class="btn btn-primary">Button</a>
      </div>
     
    </div>
  </div>
  <?php endforeach; ?> 
  </div>
</div>

</div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->



<!--/.Carousel Wrapper-->

<br><br><br>
<br> <br>



<h3>Flowers</h3>
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">
      <div class="row">
      <?php foreach ($flowers as $flower): ?>
      <div class="col-md-4 clearfix d-md-block d-none">
    <div class="card mb-2">
      <?php $counter = 0; ?>
        <?php 
          $counter++;
    if ($counter > 3){
    break;
    }?>
            <?= ($flower['plantImage'] <> " " ? "<img class='card-img-top' src='images/{$flower['plantImage']}'/>" : "") ?>
            <div class="card-body">
              <h4 class="card-title"><a href="plantInfo.php?plantID=<?php echo ($flower['plantID']); ?>"> <?php echo ($flower['plantName']); ?></a></h4>
              <p class="card-text"><?php echo ($flower['description']);?></p>
              <a class="btn btn-primary">Button</a>
            </div>
           
          </div>
        </div>
        <?php endforeach; ?> 
      </div>

    </div>
    <!--/.First slide-->


    <!--Second slide-->
   <div class="carousel-item">

      <div class="row">
      <?php foreach ($flowers1 as $flower1): ?>
      <div class="col-md-4 clearfix d-md-block">
    <div class="card mb-2">
      <?php $counter = 0; ?>
      
        <?php 
          $counter++;
    if ($counter > 3){
    break;
    }?>
            <?= ($flower1['plantImage'] <> " " ? "<img class='card-img-top' src='images/{$flower1['plantImage']}'/>" : "") ?>
            <div class="card-body">
              <h4 class="card-title"><a href="plantInfo.php?plantID=<?php echo ($flower1['plantID']); ?>"> <?php echo ($flower1['plantName']); ?></a></h4>
              <p class="card-text"><?php echo ($flower1['description']);?></p>
              <a class="btn btn-primary">Button</a>
            </div>
           
          </div>
        </div>
        <?php endforeach; ?> 
        </div>
      </div>

  
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item">

<div class="row">
<?php foreach ($flowers2 as $flower2): ?>
<div class="col-md-4 clearfix d-md-block">
<div class="card mb-2">
<?php $counter = 0; ?>

  <?php 
    $counter++;
if ($counter > 3){
break;
}?>
      <?= ($flower2['plantImage'] <> " " ? "<img class='card-img-top' src='images/{$flower2['plantImage']}'/>" : "") ?>
      <div class="card-body">
        <h4 class="card-title"><a href="plantInfo.php?plantID=<?php echo ($flower2['plantID']); ?>"> <?php echo ($flower2['plantName']); ?></a></h4>
        <p class="card-text"><?php echo ($flower2['description']);?></p>
        <a class="btn btn-primary">Button</a>
      </div>
     
    </div>
  </div>
  <?php endforeach; ?> 
  </div>
</div>

</div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>

<!--/.Carousel Wrapper-->
</div>

</div>
</div>
</div>
<?php
include('includes/footer.php');  


?>

<br><br><br>
<br> <br>
            <script src="js/jQuery.js" type="text/javascript"></script>
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                </body>
                </html>