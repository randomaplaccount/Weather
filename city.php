<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Information(Farenhite)</title>
    <link rel="stylesheet" href="city.css">
</head>
<body>
    <div class="weather-container">
        <div class="weather-info">
           <a href="city2.php?city=<?= $_GET['city'] ?>&temperature=<?= $_GET['temperature'] ?>&description=<?=  $_GET['description']?>&wind= <?= $_GET['wind'] ?>"> <button class="toggle-button">Celsius</button> </a>
            <a href="city3.php?city=<?= $_GET['city'] ?>&temperature=<?= $_GET['temperature'] ?>&description=<?=  $_GET['description']?>&wind= <?= $_GET['wind'] ?>"> <button class="toggle-button">Kelvin</button> </a>
 <a href="index.html"> <button class="toggle-button">Home</button> </a>

               <!--Visar infromationen för stad-->
             <h1 class="weather-info">City: <?php echo isset($_GET['city']) ? $_GET['city'] . '' : 'N/A'; ?></h1>
             <!--Visar infromationen för tempratur-->
            <h3 class="weather-info">Temperature: <?php echo isset($_GET['temperature']) ? $_GET['temperature'] . ' °F' : 'N/A'; ?></h3>
            <!--Visar infromationen för väder-->
            <h3 class="weather-info">Weather: <?php echo isset($_GET['description']) ? $_GET['description'] : 'N/A'; ?></h3>
            <!--Visar infromationen för wind-->
            <h3 class="weather-info">Wind Speed: <?php echo isset($_GET['wind']) ? $_GET['wind'] . ' mph' : 'N/A'; ?></h3>
        </div>
    </div>
</body>
</html>
