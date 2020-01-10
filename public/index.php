<?php session_start();

use App\Controller\WeatherController;
use App\Service\WeatherService;

require './../vendor/autoload.php';

$controller = new WeatherController();
if (count(filter_input_array(INPUT_POST)["city"]) > 0) {
    $controller->showByCity();
} else {
    $controller->show();
}





