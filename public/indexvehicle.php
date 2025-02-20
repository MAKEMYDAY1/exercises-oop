<?php

use App\Bicycle;
use App\CarStart;
use App\Vehicle;

require '../vendor/autoload.php';

$car = new CarStart();
$bicycle = new Bicycle();

echo($car->start()) . PHP_EOL;
echo($car->stop()) . PHP_EOL;
echo($bicycle->start()) . PHP_EOL;
echo($bicycle->stop()) . PHP_EOL;