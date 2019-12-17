<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Plants Page</title>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!--Bootstrap core -->
  <link href="css/graham.css" rel="style">
  <link href="css/style.css" rel="style">
  <!-- Custom fonts for this theme -->

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->

  
  <link href="css/freelancer.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="js/main.js" type="text/javascript"></script>
  <script src="js/jquery-1.11.3min.js.js" type="text/javascript"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
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
        
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

<br><br>
<br><br><br> 
 <!--Image slider for Vegetables  -->

 <h3 id="VegImages" style="text-align:left;">Vegetables</h3>
            <hr class="divline">
            <div class="container">
                <div class='row'>
                    <div class='col-md-12'>
                        <div class="carousel slide media-carousel" id="media1">
                            <div class="carousel-inner">
                          
                                <div class="item active" >
                                    <div class="row"> 


<?php $counter = 0; ?>
                                        <?php foreach ($vegetables as $veg): ?>
                                            <?php
                                            $counter++; //increase counter number
                                            if ($counter > 4) {
                                                break;
                                            }
                                            ?>  

                                            <div class="col-md-3">
    <?= ($veg['plantImage'] <> " " ? "<img style='width:250px; height:250px; margin-top:10px;' src='images/{$veg['plantImage']}'/>" : "") ?>
    <div class="carousel-caption">
                             <p> <a href="plantInfo.php?plantID=<?php echo ($veg['plantID']); ?>"> <?php echo ($veg['plantName']); ?></a></p>
                             </div>   
                            
                                            </div> 
                                            
<?php endforeach; ?> 


                                    </div>
                                </div>


                                <div class="item">
                                    <div class="row">


                                        <?php $counter1 = 0; ?><?php foreach ($vegetables1 as $veg1): ?>
                                            <?php
                                            $counter1++; //increase counter number
                                            if ($counter1 > 4) {
                                                break;
                                            }
                                            ?>  
                                            <div class="col-md-3">

                                            <?= ($veg1['plantImage'] <> " " ? "<img style='width:250px; height:250px; margin-top:10px;' src='images/{$veg1['plantImage']}'/>" : "") ?>
                                            <div class="carousel-caption">
                                            <p> <a href="plantInfo.php?plantID=<?php echo ($veg1['plantID']); ?>"> <?php echo ($veg1['plantName']); ?></a></p>
                             </div>   
                                           
                                           
                                            </div>  

<?php endforeach; ?> 

                                    </div>
                                </div>

                            </div>

                            <a data-slide="prev" href="#media1" class="left carousel-control">&lt;</a>
                            <a data-slide="next" href="#media1" class="right carousel-control">&gt;</a>
                        </div>                          
                    </div>
                </div>
            </div>

                <!--Image slider for Fruits  -->
                <br><br><br>


 <h3 id="FruitImages" style="text-align:left;">Fruits</h3>
            <hr class="divline">
            <div class="container">
                <div class='row'>
                    <div class='col-md-12'>
                        <div class="carousel slide media-carousel" id="media2">
                            <div class="carousel-inner">

                                <div class="item active" >
                                    <div class="row"> 


<?php $counter = 0; ?>
                                        <?php foreach ($fruits as $fruit): ?>
                                            <?php
                                            $counter++; //increase counter number
                                            if ($counter > 4) {
                                                break;
                                            }
                                            ?>  

                                            <div class="col-md-3">
    <?= ($fruit['plantImage'] <> " " ? "<img style='width:250px; height:250px; margin-top:10px;' src='images/{$fruit['plantImage']}'/>" : "") ?>
    <div class="carousel-caption">
    <p> <a href="plantInfo.php?plantID=<?php echo ($fruit['plantID']); ?>"> <?php echo ($fruit['plantName']); ?></a></p>
                             </div>   

                                            </div>   
<?php endforeach; ?> 


                                    </div>
                                </div>


                                <div class="item">
                                    <div class="row">


                                        <?php $counter1 = 0; ?><?php foreach ($fruits1 as $fruit1): ?>
                                            <?php
                                            $counter1++; //increase counter number
                                            if ($counter1 > 4) {
                                                break;
                                            }
                                            ?>  
                                            <div class="col-md-3">

                                            <?= ($fruit1['plantImage'] <> " " ? "<img style='width:250px; height:250px; margin-top:10px;' src='images/{$fruit1['plantImage']}'/>" : "") ?>
                                            <div class="carousel-caption">
                                            <p> <a href="plantInfo.php?plantID=<?php echo ($fruit1['plantID']); ?>"> <?php echo ($fruit1['plantName']); ?></a></p>
                             </div> 
                                            </div>   
<?php endforeach; ?> 

                                    </div>
                                </div>

                            </div>

                            <a data-slide="prev" href="#media2" class="left carousel-control">&lt;</a>
                            <a data-slide="next" href="#media2" class="right carousel-control">&gt;</a>
                        </div>                          
                    </div>
                </div>

            </div>
 <!--Image slider for Flowers  -->
 <br><br><br>    
                <h2 id="roomImages"style= "text-align:left;">Flowers</h2>
                <hr class="divline">
                <div class="container">
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class="carousel slide media-carousel" id="media3">
                                <div class="carousel-inner">


                                    <div class="item active" >
                                        <div class="row">

                                            <?php $counter6 = 0; ?>
<?php foreach ($flowers as $flower): ?>
    <?php
    $counter6++; //increase counter number
    if ($counter6 > 4) {
        break;
    }
    ?>
                                                <div class="col-md-3">
                                                <?= ($flower['plantImage'] <> " " ? "<img style='width:250px; height:250px; margin-top:10px;' src='images/{$flower['plantImage']}'/>" : "") ?>
                                                <div class="carousel-caption">
                                                <p> <a href="plantInfo.php?plantID=<?php echo ($flower['plantID']); ?>"> <?php echo ($flower['plantName']); ?></a></p>
                             </div>                              
                                                </div>   
                                            <?php endforeach; ?> 


                                        </div>
                                    </div>


                                    <div class="item">
                                        <div class="row">

<?php $counter7 = 0; ?>
<?php foreach ($flowers1 as $flower1): ?>
    <?php
    $counter7++; //increase counter number
    if ($counter7 > 4) {
        break;
    }
    ?><div class="col-md-3">
    <?= ($flower1['plantImage'] <> " " ? "<img style='width:250px; height:250px; margin-top:10px;' src='images/{$flower1['plantImage']}'/>" : "") ?>
    <div class="carousel-caption">
    <p> <a href="plantInfo.php?plantID=<?php echo ($flower1['plantID']); ?>"> <?php echo ($flower1['plantName']); ?></a></p>
                             </div> 
                                                </div>   
<?php endforeach; ?> 


                                        </div>   
                                    </div>

                                    <a data-slide="prev" href="#media3" class="left carousel-control">&lt;</a>
                                    <a data-slide="next" href="#media3" class="right carousel-control">&gt;</a>
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div>

        </div>
<br><br><br>
<br> <br>


            <script src="js/jQuery.js" type="text/javascript"></script>
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                </body>
                </html>