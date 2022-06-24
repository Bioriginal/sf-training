<?php
namespace App\Service;

abstract class Animal {

    private string $name;
    private int $age;

    public function __construct(string $name, string $age){

        $this->name = $name;
        $this->age = $age;

    }

    public function setName($name)
    {
        $this->name = $name;
    }


    abstract function speak():string;


    public function __toString(): string
    {

        return $this->name . " " . $this->age;
    }


}
