<?php

namespace App;

class Car
{
    private string $brand;
    public string $model;
    protected int $year;

    public function __construct(string $brand, string $model, int $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
}