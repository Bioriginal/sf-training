<?php

namespace App\Service;

use JetBrains\PhpStorm\Pure;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

/**
 * @property $name
 */
class AutowireCow extends Animal
{
    #[Pure] public function __construct(string $name, string $age)
    {

        

        parent::__construct($name, $age);

    }

    function speak(): string
    {

        return "Meuh meuh " . $this;
        // TODO: Implement speak() method.
    }
}
