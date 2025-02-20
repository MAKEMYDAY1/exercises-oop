<?php

use App\JsonFormat;
use App\XmlFormat;

require '../vendor/autoload.php';

$data = ["name" => "John", "age" => 30];

$jsonFormat1 = new JsonFormat();
$xmlFormat1 = new XmlFormat();

echo "JSON Encode:\n";
print_r($jsonFormat1->encode($data));

echo "\nJSON Decode:\n";
print_r($jsonFormat1->decode('{"name":"John","age":30}'));

echo "\nXML Encode:\n";
print_r($xmlFormat1->encode($data));

echo "\nXML Decode:\n";
print_r($xmlFormat1->decode($xmlFormat1->encode($data)));