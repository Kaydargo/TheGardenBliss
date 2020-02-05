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
var openWeatherMap = 'http://api.openweathermap.org/data/2.5/forecast'

if (window.navigator && window.navigator.geolocation) {
    window.navigator.geolocation.getCurrentPosition(function(position) {
        $.getJSON(openWeatherMap, {
            lat: position.coords.latitude,
            lon: position.coords.longitude,
            units: 'metric',
            APPID: '6f58e1671e79c93bc5bc7fc488b6f9df'
        }).done(function(weather) {
            // getCurrentDayWeather(weather),
            get5dayWeather(weather)
        })
    })
}
// **************** GET WEATHER USING LONGITUDE AND LATITUDE - 1 DAY *******************
// function weatherLongLat(lat, long){
// // The Endpoint URL
// const url = 'https://api.openweathermap.org/data/2.5/weather?';
// const key = 'appid=6f58e1671e79c93bc5bc7fc488b6f9df';
// const longitude = 'lat='+ lat; //coordinates[0];
// const latitude = 'lon=' + long; //coordinates[1];
// const units = 'metric';
// const weather = url + '&' + latitude + '&' + longitude + '&' + units + '&' + key;

// //Fetchs api service
// fetch(weather)
// // Parse the body as JSON
// .then(response => response.json())
// .then (data => {
//     console.log( formatWeather(data));
//   formatWeather(data);
// })
// .catch (error => console.error(error))
// }

// //Dundalk - lat=53.9979451&lon=-6.405957
// weatherLongLat(lat,long);

function get5dayWeather(weatherForecast){
  const date = new Date();
  const weekday = new Array(7);
  weekday[0] = "Sunday";
  weekday[1] = "Monday";
  weekday[2] = "Tuesday";
  weekday[3] = "Wednesday";
  weekday[4] = "Thursday";
  weekday[5] = "Friday";
  weekday[6] = "Saturday";
 
  let getCurrentDay = weekday[date.getDay()];
 
 let currDateTitle = document.querySelector('.weatherTitle', [0]);
 currDateTitle.innerText = getCurrentDay;

 let tomorrowDateTitle = document.querySelectorAll('.weatherTitle',);
 tomorrowDateTitle.innerText = getCurrentDay;
 
  //Name of forecast location
 //let forecastLocation = weatherForecast.city.name;

//  Object.keys(weatherForecast).forEach(function(key){
//    console.log(key, weatherForecast[key])
//  });

//Get Temperture
 for (i in weatherForecast.list) {
  temperture = weatherForecast.list[i].main.temp;
  console.log(temperture);
}

  
  //   x += `Temp: ${weatherForecast.list.main[i].temp}`;
  //   x += `Weather: ${weatherForecast.list.weather[i].main}`;
  //   x += `Description: ${weatherForecast.list.weather[i].description}`;
  //   x += `Icon: ${weatherForecast.list.weather[i].icon} `;
  //   }
  // }
}

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