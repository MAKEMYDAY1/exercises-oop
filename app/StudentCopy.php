<?php

namespace App;
class StudentCopy
{
    public $name;

    public $age;

//    public function __construct($name) {
//        $this->name = $name;
//    }

//    public function __destruct() {
//        echo 'объект уничтожен!!!';
//    }

    public function __call(string $methodName, array $arguments)
    {
        if ($methodName === 'sayHello') {
            return 'Hello, my name is ' . $this->name;
        }
    }

    public static function __callStatic(string $methodName, array $arguments) {
        if ($methodName === 'create') {
            return new static(...$arguments);
        }
    }

    public function __get(string $propertyName)
    {
        if ($propertyName === 'name') {
            return $this->name;
        }
        return null;
    }

    public function __set(string $propertyName, $value): void
    {
        if ($propertyName === 'name') {
            $this->name = $value;
        }

        echo 'ERROR!!!';
    }

    public function __sleep(): array
    {
        return ['name', 'age'];
    }

    public function __wakeup(): void
    {
        echo 'Hello!';
    }

    public function __toString(): string
    {
        return 'Person: ' . $this->name . ' age: ' . $this->age;
    }

    public function __invoke($string, $number)
    {
        return 'Invoke!' . $string . ' ' . $number;
    }
}