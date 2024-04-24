<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Information (Celsius)</title>
    <link rel="stylesheet" href="city.css">
</head>
<body>
    <div class="weather-container">
        <div class="weather-info">
            <a href="city.php?city=<?= $_GET['city'] ?>&temperature=<?= $_GET['temperature'] ?>&description=<?=  $_GET['description']?>&wind= <?= $_GET['wind'] ?>"> <button class="toggle-button">Farenhite</button> </a>
            <a href="city3.php?city=<?= $_GET['city'] ?>&temperature=<?= $_GET['temperature'] ?>&description=<?=  $_GET['description']?>&wind= <?= $_GET['wind'] ?>"> <button class="toggle-button">Kelvin</button> </a>
             <a href="index.html"> <button class="toggle-button">Home</button> </a>

            <h1 class="weather-info">City: <?php echo isset($_GET['city']) ? $_GET['city'] . '' : 'N/A'; ?></h1>
            <h3 class="weather-info">Temperature: <?php echo isset($_GET['temperature']) ? round((($_GET['temperature'] - 32) * 5/9), 2) . ' °C' : 'N/A'; ?></h3>
            <h3 class="weather-info">Weather: <?php echo isset($_GET['description']) ? $_GET['description'] : 'N/A'; ?></h3>
            <h3 class="weather-info">Wind Speed: <?php echo isset($_GET['wind']) ? $_GET['wind'] . ' mph' : 'N/A'; ?></h3>
        </div>
    </div>
</body>
</html>
