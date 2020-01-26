//const fetch = require("node-fetch");

function weatherLongLat(lat, long){

// The Endpoint URL
const url = 'https://api.openweathermap.org/data/2.5/weather?';
const key = 'appid=6f58e1671e79c93bc5bc7fc488b6f9df';
const longitude = 'lat='+ lat;
const latitude = 'lon=' + long;
const weather = url + '&' + latitude + '&' + longitude + '&' + key;

//Fetchs api service
fetch(weather)
// Parse the body as JSON
.then(response => response.json())
.then (data => {
    console.log( formatWeather(data));
  formatWeather(data);
})
.catch (error => console.error(error))
}
//Dundalk - lat=53.9979451&lon=-6.405957
weatherLongLat(53.9979451,-6.405957);

function formatWeather (weatherForecast){
    var celcius = Math.round(parseFloat(weatherForecast.main.temp)-273.15);
	var fahrenheit = Math.round(((parseFloat(weatherForecast.main.temp)-273.15)*1.8)+32); 
    
    document.getElementById('description').innerHTML= weatherForecast.weather[0].description;
    document.getElementById('temp').innerHTML = celcius + '&deg;';
    document.getElementById('location').innerHTML = weatherForecast.name;
   
    var iconcode = weatherForecast.weather[0].icon;
    var iconurl = "http://openweathermap.org/img/w/" + iconcode + ".png";
    $('#wicon').attr('src', iconurl);
}