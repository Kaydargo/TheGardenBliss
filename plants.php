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
        
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

<br><br>
<br><br><br> 


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
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->


</div>
<br><br><br>
<br> <br>


            <script src="js/jQuery.js" type="text/javascript"></script>
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                </body>
                </html>