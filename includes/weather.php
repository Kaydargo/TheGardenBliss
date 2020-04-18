<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.5/css/weather-icons.min.css">
<!-- <div class="container" id="weather"> --><br>
<div class="container">
<div class="inline"><strong>&#x2109; </strong></div>
<label class="switch">

  <input type="checkbox" id="checkbox" name="changeTemp" onclick="getWeather()" checked>
  
  <span class="slider round"></span>
  
</label>
<div class="inline"><strong>&#8451; </strong></div>
<div id="getLocation"></div>
</div>
<style>
.inline{
    display: inline-block;
}
</style>


<h4 style="text-align: center;" id="location"></h4><br>
<div class="container">
  <div class="card-deck">
    <div class="card weatherCard" style="background-size=cover;">
      <div class="card-body text-center">
      <h4 class="card-title weatherTitle" style="text-align: center;"></h4><hr>
        <h4 class="card-text mainTemp">Main Temperture</h4>
        <p class="card-text icon">Icon</p>
        <h6 class="card-text weather">Weather type.</h6>
        <p class="card-text temp">Min, Max temp</p>
      </div>
    </div>
    <div class="card weatherCard">
      <div class="card-body text-center">
      <h4 class="card-title weatherTitle" style="text-align: center;"></h4><hr>
        <h4 class="card-text mainTemp">Main Temperture</h4>
        <p class="card-text icon">Icon</p>
        <h6 class="card-text weather">Weather type.</h6>
        <p class="card-text temp">Min, Max temp</p>
      </div>
    </div>
    <div class="card weatherCard">
      <div class="card-body text-center">
      <h4 class="card-title weatherTitle" style="text-align: center;"></h4><hr>
        <h4 class="card-text mainTemp">Main Temperture</h4>
        <p class="card-text icon">Icon</p>
        <h6 class="card-text weather">Weather type.</h6>
        <p class="card-text temp">Min, Max temp</p>
      </div>
    </div>
    <div class="card weatherCard">
      <div class="card-body text-center">
      <h4 class="card-title weatherTitle" style="text-align: center;"></h4><hr>
        <h4 class="card-text mainTemp">Main Temperture</h4>
        <p class="card-text icon">Icon</p>
        <h6 class="card-text weather">Weather type.</h6>
        <p class="card-text temp">Min, Max temp</p>
      </div>
    </div> 
    
    <div class="card weatherCard">
      <div class="card-body text-center">
      <h4 class="card-title weatherTitle" style="text-align: center;"></h4><hr>
        <h4 class="card-text mainTemp">Main Temperture</h4>
        <p class="card-text icon">Icon</p>
        <h6 class="card-text weather">Weather type.</h6>
        <p class="card-text temp">Min, Max temp</p>
      </div>
    </div> 
  </div><br>
<!-- </div> -->
<!-- Additional css and js files are required on this page to overwrite code in 3.4.1 jquery.min.js which breaks drag/drop functionality -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/weatherBit.js"></script>