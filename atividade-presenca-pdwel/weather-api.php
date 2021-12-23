<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Previsão do tempo</title>
</head>
<body>

    <h3>Previsão do tempo para a cidade de Sertaneja - PR</h3>
    <?php

    $api_json_object = json_decode(file_get_contents("https://api.hgbrasil.com/weather?woeid=452041"));
    $forecast = $api_json_object->results->forecast;
    foreach ($forecast as $forecast_of_day){
        echo "Data: " . $forecast_of_day->date . "<br>";
        echo "Dia da semana: " . $forecast_of_day->weekday . "<br>";
        echo "Temperatura mínima: " . $forecast_of_day->min . "°C<br>";
        echo "Temperatura máxima: " . $forecast_of_day->max . "°C<br>";
        echo "Condições climáticas: " . $forecast_of_day->description . "<br>";
        echo "<br>";
    }

    ?>
</body>
</html>
