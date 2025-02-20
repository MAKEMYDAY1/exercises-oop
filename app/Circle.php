<?php

namespace App;

class Circle extends Shape
{
    public float $radius;

    public function __construct(float $radius) {
        parent::__construct('Circle');
        $this->radius = $radius;
    }
    public function calculateArea(): float {
        return round(pi() * $this->radius ** 2, 2);
    }
}