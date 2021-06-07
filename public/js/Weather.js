class Weather {
    constructor() {
        this.weather = '';
        this.z = 
        this.x = 49.20321173378468;
        this.y = 3.0183755823808776;
        this.myCity = "Ivors";
        this.weatherMap = document.getElementById("weatherMap");
        this.init();
        this.getApiData();
        console.log(response);
    }

    init() {
        this.getApiData();
        const{main, name, weather} = this.getApiData;
    }

    getApiData() {
       const test = fetch(`api.openweathermap.org/data/2.5/weather?q=${this.myCity}&appid=d6d1422e4fba5ce4b6b252f246b0ea50`);
       const response = response.json();
    }
    
    
}

new Weather();

