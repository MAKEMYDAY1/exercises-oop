<?php

namespace App;

abstract class Shape
{
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    abstract public function calculateArea() : float;
}