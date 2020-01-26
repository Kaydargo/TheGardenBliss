<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.5/css/weather-icons.min.css">
<div id="weather">
     <h1>Weather Forecast</h1>
<div id="icon"><img id="wicon" src="" alt="Weather icon"></div>
 <h1 id="temp"></h1>
    <div id="description"></div>
   
    <div id="location"></div>
  </div>
  <button onclick="getLocation()">Get weather for current location</button>
  <p id="getLocation"></p>
  <script src="../js/weather-api.js"></script>