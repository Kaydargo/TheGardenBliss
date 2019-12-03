<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Freelancer - Start Bootstrap Theme</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
  <link href="css/style.css" rel="style">

</head>

<body>


<?php
//Selects all images, their id and userid with the tag animated
        require('includes/functions.php');
        ?>
        <!-- Page Content -->
        <div class="container" style="text-align: center;">
        <h1 class="galhead" >Our Range of Plants</h1>
        <br><br>
        
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

<br><br>
<br><br><br> 
            

            <p class="gal-name gal-buttons" >   <a href="#vegetableImages" class="gallery-nav-links " class="gal-name-link" > Vegetables</a> </p>
           <p class="gal-name gal-buttons" > <a href="#fruitImages" class="gallery-nav-links gal-name-link"> Fruits</a> </p>
          <p class="gal-name gal-buttons" >  <a href="#flowerImages" class="gallery-nav-links gal-name-link"> Floweers</a></p>


            <br><br>
            <br><br><br>    

            <!--Image slider for House  -->

            <h2 id="VegImages">Vegetables</h2>
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

                <!--Image slider for garden  -->
                <br><br><br>

                <h2 id="fruitImages">Fruits</h2>
                <hr class="divline">
                <div class="container">
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class="carousel slide media-carousel" id="media2">
                                <div class="carousel-inner">


                                    <div class="item active" >
                                        <div class="row">

                                            <?php $counter3 = 0; ?>
                                            <?php foreach ($fruits as $fruit): ?>
                                                    <?php
                                                    $counter3++; //increase counter number
                                                    if ($counter3 > 4) {
                                                        break;
                                                    }
                                                    ?>
                                                <div class="col-md-3">
    <?= ($fruit['plantImage'] <> " " ? "<img style='width:250px; height:250px; margin-top:10px;' src='images/{$fruit['plantImage']}'/>" : "") ?>

                                                </div>   
<?php endforeach; ?> 


                                        </div>
                                    </div>


                                    <div class="item">
                                        <div class="row">

<?php $counter4 = 0; ?>
                                            <?php foreach ($fruits1 as $fruit1): ?>
                                                <?php
                                                $counter4++; //increase counter number
                                                if ($counter4 > 4) {
                                                    break;
                                                }
                                                ?><div class="col-md-3">
    <?= ($fruit1['plantImage'] <> " " ? "<img style='width:250px; height:250px;margin-top:10px;' src='images/{$fruit1['plantImage']}'/>" : "") ?>

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


                <!--Image slider for Rooms  -->
                <br><br><br>    
                <h2 id="roomImages">Flowers</h2>
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
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php include_once 'includes/footer.php'; ?>
                </body>
                </html>