<?php

namespace App;

class JsonFormat implements DataFormat
{

    public function encode($data)
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }

    public function decode($data)
    {
        return json_decode($data, true);
    }
}