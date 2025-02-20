<?php

namespace App;

class User
{
    private string $username;
    private string $email;
    private string $password;

    public function getUsername(): string {
        return $this->username;
    }
    public function setUsername($username) {
        if (is_string($username) && $username != "") {
            $this->username = $username;
        }
    }
    public function getEmail() : string {
        return $this->email;
    }
    public function setEmail($email) {
        if (is_string($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }
    }
    public function getPassword(): string {
        return $this->password;
    }
    public function setPassword($password) {
        if (is_string($password) && strlen($password) > 6) {
            $this->password = $password;
        }
    }
}