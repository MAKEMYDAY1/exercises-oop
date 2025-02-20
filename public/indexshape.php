<?php

use App\Circle;
use App\Rectangle;

require '../vendor/autoload.php';

$figure1 = new Circle(2);
$figure2 = new Rectangle(2, 4);

echo "Площадь круга: " . $figure1->calculateArea() . "\n";
echo "Площадь прямоугольника: " . $figure2->calculateArea() . "\n";