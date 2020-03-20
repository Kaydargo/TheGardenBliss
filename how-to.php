<!doctype html>
<html lang="en">
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
	
    <body>

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


        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                <div class="row">
				<div class='bar'>
                    <div class="col-md-8 offset-md-2 text">
                        <h1 class="wow fadeInLeftBig">How- To Start a Garden</h1>
                        <div class="description wow fadeInLeftBig">
                        	<p>We walk you through factors that can affect how your garden will grow — sunlight, shade, soil —
                                    and the balance between fruits, shrubs, flowers and vegetables
                         	
                        	</p>
                        </div>
</div>
                    </div>
                </div>
                
            </div>            
		</div>
		<br><br>
        
        <!-- Services -->
        <div class="services-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col services section-description wow fadeIn">
	                    <h2>Clearing your garden</h2>
	                    <hr>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-md-4 services-box wow fadeInUp">
                		<div class="row">
                			<div class="col-md-4">
			                	<div class="services-box-icon">

                        <img src="icons/shovel.png" alt=""/> 

			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3>Shovel</h3>
	                    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="col-md-4 services-box wow fadeInDown">
	                	<div class="row">
                			<div class="col-md-4">
			                	<div class="services-box-icon">

                        <img src="icons/rake.png" alt=""/> 
			                	</div>

		                	</div>
	                		<div class="col-md-8">
	                    		<h3>rake</h3>
	                    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="col-md-4 services-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	<div class="services-box-icon">
                        <img src="icons/clearGround.png" alt=""/> 
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3>clear the ground</h3>
	                    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
	                    	</div>
	                    </div>
                    </div>
	            </div>
	        </div>
        </div>

        <!-- About us -->
        <div class="about-us-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	            	<div class="col-12 col-lg-7 about-us-box wow fadeInLeft">
	                    <div class="about-us-box-text">
	                    	<h3>First thing first</h3>
	                    	<p class="medium-paragraph">
	                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
	                    		sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
	                    	</p>
	                    	<p>
	                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
	                    		Ut wisi enim ad minim veniam, quis nostrud. 
	                    		Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. 
	                    		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
	                    	</p>
	                    	<p>
	                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
	                    		Ut wisi enim ad minim veniam, quis nostrud.
	                    	</p>
	                    </div>
	                </div>
	                <div class="col-12 col-lg-5 about-us-box wow fadeInUp">
	                	
                                    
                               <div class="video-container">
    <iframe src="https://www.youtube.com/embed/Pi1x-kyC49o?start=64" height="315" width="560" allowfullscreen="" frameborder="0">
    </iframe>
</div>     
                                    
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>

		<!-- More services -->
        <div class="more-services-container section-container">
	        <div class="container">
	        	
	            <div class="row">
	                <div class="col more-services section-description wow fadeIn">
	                    <h2>Important Facts</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 more-services-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="more-services-box-icon">

                        <img src="icons/gardenSpot.png" alt=""/>                   
	                			</div>

	                		</div>
	                		<div class="col-md-9">
	                			<h3>Decide your garden Location</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
                       

	                	</div>
	                </div>
	                <div class="col-md-6 more-services-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="more-services-box-icon">

                        <img src="icons/toPlant.png" alt=""/> 
	                			</div>

	                		</div>
	                		<div class="col-md-9">
	                			<h3>Decide crops to plant</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 more-services-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="more-services-box-icon">
                        <img src="icons/prepareSoil.png" alt=""/> 
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Prepare your soil</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 more-services-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="more-services-box-icon">
                        <img src="icons/sowSeeds.png" alt=""/> 
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Sow your seeds</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>

	        </div>
        </div>

		<!-- Call to action -->
        <div class="call-to-action-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col call-to-action section-description wow fadeInLeftBig">
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
	                    	aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	
                        
	            	</div>
	            </div>
	        </div>
        </div>
        
        <!-- Portfolio -->
        <div class="portfolio-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col portfolio section-description wow fadeIn">
	                    
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>Our video show you step by step process of starting your garden from scratch!</p>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-md-4 portfolio-box wow fadeInUp">
	                	                    
                               <div class="video-container">
    <iframe src="https://www.youtube.com/embed/Pi1x-kyC49o?start=64" height="315" width="560" allowfullscreen="" frameborder="0">
    </iframe>
</div>     
                		<h3><a href="#">Prepare your soil for planting</a></h3>
                		
                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-md-4 portfolio-box wow fadeInDown">
	                	                    
                               <div class="video-container">
    <iframe src="https://www.youtube.com/embed/Pi1x-kyC49o?start=64" height="315" width="560" allowfullscreen="" frameborder="0">
    </iframe>
</div>     
                		<h3><a href="#"><strong>Transfer your plant from container to garden</strong></a> </h3>
                		
                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-md-4 portfolio-box wow fadeInUp">
	                	                    
                               <div class="video-container">
    <iframe src="https://www.youtube.com/embed/Pi1x-kyC49o?start=64" height="315" width="560" allowfullscreen="" frameborder="0">
    </iframe>
</div>     
                		<h3><a href="#">Harvesting your crop</a> </h3>
                		
                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
	            </div>
	           
	            </div>
	        </div>
        </div>
        
        <!-- Testimonials -->
        <div class="testimonials-container section-container section-container-image-bg">
        	<div class="container">
        		<div class="row">
        			<div class="col testimonials section-description wow fadeIn"></div>
        		</div>
        		<div class="row">
        			<div class="col-md-10 offset-md-1 testimonial-list wow fadeInUp">
        				
        				<div class="tab-content" id="myTabContent">
        					<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
        						<div class="testimonial-image">
                					
                				</div>
                				<div class="testimonial-text">
	                                <p>
	                                	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
	                                	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
	                                	Lorem ipsum dolor sit amet."<br>
	                                	<a href="#">Lorem Ipsum, dolor.co.uk</a>
	                                </p>
                                </div>
        					</div>
        					<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
        						<div class="testimonial-image">
                				
                				</div>
                				<div class="testimonial-text">
	                                <p>
	                                	"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
	                                	ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
	                                	lobortis nisl ut aliquip."<br>
	                                	<a href="#">Minim Veniam, nostrud.com</a>
	                                </p>
                                </div>
        					</div>
        					<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
        						<div class="testimonial-image">
                					
                				</div>
                				<div class="testimonial-text">
	                                <p>
	                                	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
	                                	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
	                                	Lorem ipsum dolor sit amet."<br>
	                                	<a href="#">Lorem Ipsum, dolor.co.uk</a>
	                                </p>
                                </div>
							</div>
        					<div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
        						<div class="testimonial-image">
                					
                				</div>
                				<div class="testimonial-text">
	                                <p>
	                                	"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
	                                	ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
	                                	lobortis nisl ut aliquip."<br>
	                                	<a href="#">Minim Veniam, nostrud.com</a>
	                                </p>
                                </div>
        					</div>
        				</div>
        				
        				<ul class="nav nav-tabs" id="myTab" role="tablist">
        					<li class="nav-item">
        						<a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"></a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"></a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"></a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"></a>
        					</li>
        				</ul>
        				
        			</div>
        		</div>
        	</div>
        </div>
                
        <!-- Blog -->
        <div class="blog-container section-container">
	        <div class="container">
	        	
	            <div class="row">
	                <div class="col blog section-description wow fadeIn">
	                    <h2>Why not try these cropss in your garden</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 blog-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="blog-box-image">
	                			<img src="images/carrot.jpg" alt="" data-at2x="images/tulips.jpg">
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3><a href="#">Planting Tulips</a> <i class="fas fa-angle-right"></i></h3>
	                			
		                    	<p>
		                    		There are over 10,000 varieties of tomato in the world, these come in a variety of colours including pink, purple, black, yellow and white.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 blog-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="blog-box-image">
	                				<img src="images/apple.jpg" alt="" data-at2x="images/lettuce.jpg">
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3><a href="#">How to plant Lettuce</a> <i class="fas fa-angle-right"></i></h3>
	                			
		                    	<p>
		                    		Do not store your lettuce near apples, bananas, or any other ethylene-emitting fruits. Ethylene causes lettuce to ripen very fast and start to decay quickly!
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 blog-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="blog-box-image">
	                			<img src="images/garlic.jpg" alt="" data-at2x="images/parsley.jpg">
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3><a href="#">How to care for parsley</a> <i class="fas fa-angle-right"></i></h3>
	                			
		                    	<p>
		                    		Parsley will only bloom naturally for 3-7 days in spring. If you trim the stems of your freshly cut tulips, they will continue to grow in your vase for at least another inch.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 blog-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="blog-box-image">
                        <img src="images/daffodil.png" alt="" data-at2x="images/roses.jpg">
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3><a href="#">watering your rose plant</a> <i class="fas fa-angle-right"></i></h3>
	                		
		                    	<p>
		                     Red roses are in such high demand on February 14th that it could be tough to get your hands on them. So why not have your own rose garden.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>
	            
	           
	            </div>

			</div>
			
        </div>
		
       
     


        <!-- Javascript -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/retina-1.1.0.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/scripts.js"></script>

		<?php
    include('includes/footer3.php');
        ?>

    </body>

</html>ff