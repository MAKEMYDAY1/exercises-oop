<?php

namespace App;

class CarStart extends Vehicle
{

    public function start()
    {
        echo 'Автомобиль заведён';
    }

    public function stop()
    {
        echo 'Автомобиль заглушен';
    }
}