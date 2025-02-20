<?php

use App\AppVersion;

require '../vendor/autoload.php';

$app = new AppVersion('123.2.1');

echo 'Текущая версия приложения ' . AppVersion::getVersion() . PHP_EOL;
echo 'Новая версия приложения ' . AppVersion::updateVersion('123.2.2') . ' была установлена!' . PHP_EOL;
