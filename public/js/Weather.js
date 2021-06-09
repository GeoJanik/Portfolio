 getWeatherData();

 function showData(d) {
     const description = d.weather[0].description;

     document.getElementById('description').innerHTML = description[0].toUpperCase() + description.slice(1);
     document.getElementById('temp').innerHTML = Math.round(d.main.temp) + '&deg;';
     document.getElementById('location').innerHTML = d.name;

     const weatherIcone = document.getElementById("weatherIcon");
     const colorIcon = d.weather[0].icon.replace('n', 'd');

     weatherIcone.src = 'http://openweathermap.org/img/wn/' + colorIcon + '@2x.png';
 }

 function getWeatherData() {
     fetch('https://api.openweathermap.org/data/2.5/weather?lat=49.20373054467455&lon=3.0192892827133275&units=metric&appid=d6d1422e4fba5ce4b6b252f246b0ea50&lang=fr')
         .then(resp => resp.json()) // Convert data to json
         .then(data => showData(data));
 }