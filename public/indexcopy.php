<?php

use App\StudentCopy;
use App\PersonCopy;

require_once '../vendor/autoload.php';

$student = new StudentCopy();
$student->name = 'Pavel';
$student->age = 26;

print_r($student('sadasd', 23));