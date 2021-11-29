<?php
    if ($_GET['city']) {
        $city = $_GET['city'];
        $city = str_replace(" ", "", $city);
        try {
            $forecastPage = file_get_contents('https://www.weather-forecast.com/locations/'.$city.'/forecasts/latest');
            if ($forecastPage) {
                $pageFirstArray = explode('</button></div></div></div></section><div class="row hidden-for-large-up"><div class="column small-12"><section class="location-summary"><div class="location-summary__item">', $forecastPage);
                $pageSecondArray = explode('<span data-read-more-caret="">▼</span></button></section></div></div><div class="show-for-large-up" style="margin-top: 15px;"></div><div class="centered-b" style="margin-bottom: 15px;">', $pageFirstArray[1]);
                $weather = $pageSecondArray[0];
                $weatherInfo = '<div class="alert alert-success" role="alert"><div>'.$weather.'</div></div>';
            } else {
                $message = "Could not find a url for the city provided in the weather forecast website. Please make sure the name of the city is valid and try again.";
                $errorMessage = '<div class="alert alert-danger" role="alert">'.$message.'</div>';
            }
        }
        catch(Exception $e) {
            echo $e -> getMessage();
        }
    }
?>


