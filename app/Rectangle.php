<?php

namespace App;

class Rectangle extends Shape
{
    public int $width;
    public int $height;

    public function __construct(int $width, int $height) {
        parent::__construct('Rectangle');
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(): float {
        return $this->width * $this->height;
    }
}