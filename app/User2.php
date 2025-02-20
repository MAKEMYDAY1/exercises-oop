<?php

namespace App;

class User2
{
    use Loggable;
    public string $username;
    public string $email;

    public function __construct(string $username, string $email) {
        $this->username = $username;
        $this->email = $email;
    }

    public function register($username, $email): string
    {
        $this->log("Пользователь $username успешно зарегистрирован");
        return $this->message;
    }
}