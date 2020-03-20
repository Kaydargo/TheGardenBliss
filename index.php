<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<?php
    include('includes/database.php');
    include("loginServ.php");
    ?>
 
    <head>

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
<link rel="stylesheet" href="css/graham.scss">
<link rel="stylesheet" href="css/animate.css">
 <link rel="stylesheet" href="css/media-queries.css">

</head>
<?php

if(!isset($_SESSION['userID'])){
    include('includes/header.php');
}
else{
    include('includes/header2.php');
}
?> 
    <br>
     <br>
     <br>
    <body>
       <!-- Top content -->
       <div class="top-content"> 
            <div class="container">
                <div class="row">
                    <div class='bar'>
                    <div class="col-md-8 offset-md-2 text">
                        <h1 class="wow fadeInLeftBig">Welcome to GardenBliss</h1>
                        <div class="description wow fadeInLeftBig">
                        	<p> Get all the information you need for your gardening journey-crops to plant in diferent seasons,
                           watering measurement, plant placement and how to control diseases and pests that can affect your plants

                            </p>
</div>
                        </div>
</div>
                    </div>
                </div>
                
            </div>            
        </div>
    
<br><br>

    <div class="container"> 
   <div class="row row1"> 
      <div class="col-sm-6">
        <img class='image1 img-fluid' src="images/home.jpg" alt="">
      </div>
      <div class="col-sm-6">
          <h3 class="plantName">OUR MISSION</h3>
          <p>Our mission is to create an interactive application that will assist aspiring gardeners to plan and create a fabulous gardening experience. We hope to achieve this by providing our users with quality reliable advice, and inspirational ideas to create gardens they aspire to have in their homes. We will show you how to grow most plants with limited effort so that you can enjoy all the benefits of your garden.</p>
      </div> 
   </div> 
</div>
<br><br>
<div class="container"> 
<h3 class="plantName">Key Functionalities</h3>
<br>
<div class="row display-flex">
<div class="col-sm">
<div class="polaroid">
<img class="icons img-fluid" src='icons/drag_drop1.svg'>
  <div class="ctnbtm">
  <h4 class="func">Drag and Drop Garden Planner</h4>
  </div>
</div>
  </div>
  <div class="col-sm">
  <div class="polaroid">
  <img class="icons img-fluid" src='icons/info.svg'>
  <div class="ctnbtm">
  <h4 class="func">Information Guides on Plant Keeping</h4>
  </div>
  </div>
</div>
  <div class="col-sm">
  <div class="polaroid">
  <img class="icons img-fluid" src='icons/tutorial1.svg'>
  <div class="ctnbtm">
  <h4 class="func">Tutorials on How to Garden</h4>
  </div>
  </div>
  </div>
  <div class="col-sm">
  <div class="polaroid">
  <img class="icons img-fluid" src='icons/bee1.svg'>
  <div class="ctnbtm">
  <h4 class="func">Interactive Game on Bee Conservation</h4>
  </div>
  </div>
  </div>
</div> 
</div>
<br><br><br>











<div class="container-fluid ctnCol"> 
<div class="container pad"> 
   <div class="row row1"> 
   <div class="col-sm-6">
          <h3 class="howTo">About Us</h3>
          <p class="para">We understand and belief that most homeowners want an attractive and beautiful garden, but realised that not everyone has the knowledge, time and inclination to achieve this. Our aim is to inspire beginner gardeners to grow a wide variety of popular, easy to grow plants and provide practical insight into garden planning process. We provide avenue for adults to explore a wide range of easy to grow flowers, fruits and vegetables easily in one place. Our website allows the users to create a custom plan for their garden using our drag and drop garden planner which they can save to their user profile for future reference.  </p>
      </div> 
      <div class="col-sm-6">
      <img class='image1 img-fluid' src="images/about3.jpg" alt="">
      </div>
   </div> 
    </div> 
</div>
  
<script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/retina-1.1.0.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/scripts.js"></script>



    </body>
    <?php
    include('includes/footer3.php');
        ?>
</html>
