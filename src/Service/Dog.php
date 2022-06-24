<?php
namespace App\Service;

use JetBrains\PhpStorm\Pure;

class Dog extends Animal {

    #[Pure] public function __construct(string $name, string $age){

        parent::__construct($name,$age);

    }
    function speak(): string
    {
        return "Wouf wouf " . $this;
    }
}
