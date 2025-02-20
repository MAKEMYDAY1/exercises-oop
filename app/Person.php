<?php

namespace App;

class Person
{
    protected string $name;
    protected int $age;

    public static $counter = 0;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        self::$counter++;
    }

    public static function getCounter() {
        return self::$counter;
    }
}