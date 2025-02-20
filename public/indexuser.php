<?php

use App\User;

require '../vendor/autoload.php';

$user1 = new User();

$user1->setUsername('111111122112') . '<br/>';

$user1->setEmail('admin@gmail.com') . '<br/>';

$user1->setPassword('1233356');

echo($user1->getUsername()) . PHP_EOL;
echo($user1->getEmail()) . PHP_EOL;
echo($user1->getPassword()) . PHP_EOL;