<?php
namespace App\Service;

use JetBrains\PhpStorm\Pure;

class Cat extends Animal {


    #[Pure] public function __construct(string $name, string $age){

      parent::__construct($name,$age);

    }




    function speak(): string
    {

        return "Miaou Miaou " . $this;
    }
}
