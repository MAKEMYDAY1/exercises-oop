<?php

use App\BankAccount;

require '../vendor/autoload.php';

$bankUser1 = new BankAccount('Galya', 2000, 12, 'RUB');
$bankUser2 = new BankAccount('Evgeniy', 2000000000, 10, 'RUB');
$bankUser3 = new BankAccount('Elena', 100000, 1, 'USD');

print_r($bankUser1);
print_r($bankUser2);
print_r($bankUser3);