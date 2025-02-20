<?php

use App\Student;
use App\Person;

require_once '../vendor/autoload.php';

$student1 = new Student('Pavel', '26');
$student2 = new Student('Misha', '21');

$person1 = new Person('Pavel', '26');
$person2 = new Person('Misha', '21');

echo 'Количество людей:' . Person::getCounter();
echo 'Количество студентов:' . Student::getStudentCounter();