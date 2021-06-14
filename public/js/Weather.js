class Weather {
    constructor(lat, lon) {
        this.lat = lat;
        this.lon = lon;
        this.fetchData().then(data => this.showData(data));
    }

    fetchData() {
        return fetch('https://api.openweathermap.org/data/2.5/weather?lat=' + this.lat + '&lon=' + this.lon + '&units=metric&appid=d6d1422e4fba5ce4b6b252f246b0ea50&lang=fr')
            .then(resp => resp.json());
    }

    showData(d) {
        const description = d.weather[0].description;
        document.getElementById('description').innerHTML = description[0].toUpperCase() + description.slice(1);
        document.getElementById('degree').innerHTML = Math.round(d.main.temp) + '&deg;';
        document.getElementById('location').innerHTML = d.name;
        const colorIcon = d.weather[0].icon.replace('n', 'd');
        let weatherIcone = document.createElement('img');
        weatherIcone.src = 'http://openweathermap.org/img/wn/' + colorIcon + '@2x.png';
        let block = document.getElementById("weatherIcon");
        block.appendChild(weatherIcone);
    }

}

new Weather(49.20373054467455, 3.0192892827133275);