let countdown = 60;

function getWeather() {
    const apiKey = 'c3238a87b39de7273824b1adcfa6d7f2';
    const city = '3058780'; //Martin, Slovakia (ID mesta sa dá získať cez: openweathermap.org/city/3058780 pri hľadaní mesta)

    $.ajax({
        url: `https://api.openweathermap.org/data/2.5/weather?id=${city}&appid=${apiKey}`,
        method: 'GET',
        success: function (data) {
            const temperatureInKelvin = data.main.temp;
            const temperatureInCelsius = temperatureInKelvin - 273.15;
            const cityName = data.name;
            const country = data.sys.country;
            const humidity = data.main.humidity;
            const pressure = data.main.pressure;

            const weatherInfo = `
                <h1>${cityName}, ${country}</h1>
                <p><strong>Teplota:</strong> ${temperatureInCelsius.toFixed(2)} ℃</p>
                <p><strong>Vlhkosť:</strong> ${humidity}%</p>
                <p><strong>Tlak:</strong> ${pressure} hPa</p>
                <p><strong>Počasie sa obnoví za:</strong> <span id="countdown">${countdown}</span> s</p>`;
            $('#weather-info').html(weatherInfo);
        },
        error: function () {
            $('#weather-info').html('<p>Vyskytla sa chyba pri načítaní údajov z API.</p>');
        }
    });
}

getWeather();

setInterval(getWeather, 60000);

setInterval(function () {
    countdown--;
    if (countdown < 0) countdown = 60;
    $('#countdown').text(countdown);
}, 1000);