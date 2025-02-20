<?php

use App\Car;

require '../vendor/autoload.php';

$car1 = new Car('Hunday', 'Solaris', 2012);
$car2 = new Car('Ford', 'Focus', 2010);

print_r($car1);
print_r($car2);
