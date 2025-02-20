<?php

use App\User2;

require '../vendor/autoload.php';

$user1 = new User2('MAKEMYDAY', 'example@gmail.com');

echo $user1->register('galya', 'galya@gmail.com');

