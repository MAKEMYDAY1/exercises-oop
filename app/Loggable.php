<?php

namespace App;

trait Loggable
{
    public string $message;
    public function log($message)
    {
        $this->message = $message;
    }
}