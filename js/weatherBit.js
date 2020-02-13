//const fetch = require("node-fetch");

//Getting coordinates using GeoLocation
var visitorCoords = document.getElementById("getLocation");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    visitorCoords.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  visitorCoords.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;
}

//Getting coordinates and linking with openweathermap api service
var openWeatherMap = 'https://api.weatherbit.io/v2.0/forecast/daily?'

if (window.navigator && window.navigator.geolocation) {
    window.navigator.geolocation.getCurrentPosition(function(position) {
        $.getJSON(openWeatherMap, {
            lat: position.coords.latitude,
            lon: position.coords.longitude,
            units: 'metric',
            key: 'b1a4cb99758e4bbead1bb761cbb6680b',
            days: '5'
        }).done(function(weather) {
            // getCurrentDayWeather(weather),
            get5dayWeather(weather)
        })
    })
}

function get5dayWeather(weatherForecast){

    const weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";

    var getWeatherDay = document.querySelectorAll(".weatherTitle");
console.log(weatherForecast.data[0].datetime);

    for (var i = 0; i < getWeatherDay.length; i++) {
        var dt = new Date (weatherForecast.data[i].datetime);
        getWeatherDay[i].innerHTML = weekday[dt.getDay()];
    }

//  Object.keys(weatherForecast).forEach(function(key){
//    console.log(key, weatherForecast[key])
//  });

document.getElementById('location').innerHTML = weatherForecast.city_name;

var getTemp = document.querySelectorAll(".mainTemp");

//Get Temperture
for (var i = 0; i < getTemp.length; i++) {
  getTemp[i].innerHTML = `${Math.round(weatherForecast.data[i].temp)} &deg;`;
}

//Get Icons
var getIcon = document.querySelectorAll(".icon");
for (var i = 0; i < getIcon.length; i++) {
  var iconcode = weatherForecast.data[i].weather.icon;
  var iconurl = "https://www.weatherbit.io/static/img/icons/" + iconcode + ".png";
  console.log(iconurl);
  getIcon[i].innerHTML = "<img src=\"" + iconurl + "\">";
}
//Get weather Type
var getWeatherType = document.querySelectorAll(".weather");

for (var i = 0; i < getWeatherType.length; i++) {
  getWeatherType[i].innerHTML = `${weatherForecast.data[i].weather.description}`;
}

//Get Min Max
var getMinMax = document.querySelectorAll('.temp');

for (var i = 0; i < getMinMax.length; i++) {
  getMinMax[i].innerHTML = `<strong>Min:</strong> ${Math.round(weatherForecast.data[i].low_temp)} &deg; &nbsp; &nbsp; <strong>Max:</strong> ${Math.round(weatherForecast.data[i].max_temp)}&deg;`;
}

}

  //   x += `Temp: ${weatherForecast.list.main[i].temp}`;
  //   x += `Weather: ${weatherForecast.list.weather[i].main}`;
  //   x += `Description: ${weatherForecast.list.weather[i].description}`;
  //   x += `Icon: ${weatherForecast.list.weather[i].icon} `;
  //   }
  // }


//************************* DISPLAY WEATHER FOR ONE DAY ********************************
function getCurrentDayWeather (weatherForecast){
    var minTempCelcius = Math.round(parseFloat(weatherForecast.main.temp_min)-273.15);
    var maxTempCelcius = Math.round(parseFloat(weatherForecast.main.temp_max)-273.15);
    
    //document.querySelector('#id').innerHTML = weatherForecast.weather[0].description;
    //document.querySelector('#temp').innerHTML = celcius + '&deg;';
    //document.querySelector('#location').innerHTML = weatherForecast.name;
    document.getElementById('description').innerHTML= weatherForecast.weather[0].main;
    document.getElementById('mintemp').innerHTML =  `<strong>Min:</strong> ${minTempCelcius} &deg;`;
    document.getElementById('maxtemp').innerHTML = `<strong>Max:</strong> ${maxTempCelcius} &deg;`;
    document.getElementById('location').innerHTML = weatherForecast.name;
    var iconcode = weatherForecast.weather[0].icon;
    var iconurl = "http://openweathermap.org/img/w/" + iconcode + ".png";
    $('#wicon').attr('src', iconurl);
}