<?php

namespace App;
class Student extends Person implements Info
{
    private string $university;

    public static $studentCounter = 0;

    public function __construct($name, $age) {
        parent::__construct($name, $age);
        self::$studentCounter++;
    }

    public static function getStudentCounter() {
        return self::$studentCounter;
    }
    public function greeting() {
        echo $this->protectedProperty;
    }

    public function getUniversity() {
        return $this->university;
    }

    public function setUniversity($university) {
        $this->university = $university;
    }


    public function introduce(): string
    {
        return 'Привет! Мне ' . $this->age . ' лет.';
    }
}