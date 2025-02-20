<?php

namespace App;
class BankAccount
{
    public $owner;
    public $balance;
    public $accountNumber;
    public $currency;

    public function __construct($owner, $balance, $accountNumber, $currency) {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->accountNumber = $accountNumber;
        $this->currency = $currency;
    }

    public function deposit($amount) {
        return $this->balance += $amount;
    }
    public function withdraw($amount) {
        return $this->balance -= $amount;
    }
    public function getBalance() {
        return $this->balance;
    }
    public function displayAccountInfo() {
        return [$this->owner, $this->balance, $this->accountNumber, $this->currency];
    }
}