<?php

namespace App;

class Bicycle extends Vehicle
{

    public function start()
    {
        echo 'Велосипед начал движение';
    }

    public function stop()
    {
        echo 'Велосипед остановился';
    }
}