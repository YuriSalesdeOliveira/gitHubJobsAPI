<?php

namespace App\Models\Factory;

use App\Models\Continent;
use Database\PDOConnectionFactory;

class ContinentFactory implements ModelFactoryInterface
{
    public static function create(): Continent
    {
        return new Continent(PDOConnectionFactory::create());
    }
}
