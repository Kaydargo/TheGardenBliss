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
var openWeatherMap = 'http://api.openweathermap.org/data/2.5/weather'

if (window.navigator && window.navigator.geolocation) {
    window.navigator.geolocation.getCurrentPosition(function(position) {
        $.getJSON(openWeatherMap, {
            lat: position.coords.latitude,
            lon: position.coords.longitude,
            APPID: '6f58e1671e79c93bc5bc7fc488b6f9df'
        }).done(function(weather) {
            getWeather(weather)
        })
    })
}

function weatherLongLat(lat, long){
//var coordinates = getPosition();
// The Endpoint URL
const url = 'https://api.openweathermap.org/data/2.5/forecast?';
const key = 'appid=6f58e1671e79c93bc5bc7fc488b6f9df';
const longitude = 'lat='+ lat; //coordinates[0];
const latitude = 'lon=' + long; //coordinates[1];
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
weatherLongLat(lat,long);


function getWeather (weatherForecast){
  for (var i in weatherForecast.list) {
    x += "<h2>" + weatherForecast.list.weather[i].main + "</h2>";
    for (var j in myObj.cars[i].models) {
      x += myObj.cars[i].models[j] + "<br>";
    }
  }
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

/*
const CURRENT_LOCATION = document.getElementsByClassName('weather-content__overview')[0];
const CURRENT_TEMP = document.getElementsByClassName('weather-content__temp')[0];
const FORECAST = document.getElementsByClassName('component__forecast-box')[0];

const URL = "https://api.openweathermap.org/data/2.5/forecast/daily?" +
"lat=53.9979451&lon=-6.405957&units=imperial&APPID=appid=6f58e1671e79c93bc5bc7fc488b6f9df";

function getWeatherData() {
  let headers = new Headers();

  return fetch(URL, {
    method: 'GET',
    headers: headers
  }).then(data => {
    return data.json();
  });
}

getWeatherData().then(weatherData => {
  let city = weatherData.city.name;
  let dailyForecast = weatherData.list;

  renderData(city, dailyForecast);
});

renderData = (location, forecast) => {
  const currentWeather = forecast[0].weather[0];
  const widgetHeader =
  `<h1>${location}</h1><small>${currentWeather.description}</small>`;

  CURRENT_TEMP.innerHTML =
  `<i class="wi ${applyIcon(currentWeather.icon)}"></i>
  ${Math.round(forecast[0].temp.day)} <i class="wi wi-degrees"></i>`;

  CURRENT_LOCATION.innerHTML = widgetHeader;

  // render each daily forecast
  forecast.forEach(day => {
    let date = new Date(day.dt * 1000);
    let days = ['Mon', 'Tue', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'];
    let name = days[date.getDay()];
    let dayBlock = document.createElement("div");
    dayBlock.className = 'forecast__item';
    dayBlock.innerHTML =
      `<div class="forecast-item__heading">${name}</div>
      <div class="forecast-item__info">
      <i class="wi ${applyIcon(day.weather[0].icon)}"></i>
      <span class="degrees">${Math.round(day.temp.day)}
      <i class="wi wi-degrees"></i></span></div>`;
    FORECAST.appendChild(dayBlock);
  });
}*/