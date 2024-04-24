<?php
if (isset($_GET['location'])) {
    $location = urlencode($_GET['location']);
    $apiKey = '255755349fbeadcfa34f28f0db0b6626'; // en api key som låter mig hämta infromatione från openweathermap

    // API link
    $apiUrl = 'https://api.openweathermap.org/data/2.5/weather?q=' . $location . '&appid=' . $apiKey;

    // frågar efter API infon
    $weatherData = file_get_contents($apiUrl);

    // chekar om förfrågan var fungerade 
    if ($weatherData !== false) {
       
        $weatherData = json_decode($weatherData, true);
        
        // hämtar relavant väder information
        $city = $weatherData['name'];
        $temperatureKelvin = $weatherData['main']['temp'];
        $weatherDescription = $weatherData['weather'][0]['description'];
        $windSpeed = $weatherData['wind']['speed'];

        // ändrar tempratur från kelvin till farenhite 
        $temperatureFahrenheit = ($temperatureKelvin - 273.15) * 9/5 + 32;

        // sickar användaren till webbsiddan som håller informatione de sökt efter 
        $weatherUrl = "city.php?city=$city&temperature=$temperatureFahrenheit&description=$weatherDescription&wind=$windSpeed";
        header("Location: $weatherUrl");
        exit;
    } else {
        // ett error medelande om den inte kan hämta väder datan 
        echo json_encode(array('error' => 'Failed to fetch weather data'));
    }
} else {
    // ett error medelande om som visas om location parameter is missing
    echo json_encode(array('error' => 'Location parameter is missing'));
}
?>
