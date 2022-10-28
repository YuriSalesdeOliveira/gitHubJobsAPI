<?php

namespace App\Models\Factory;

use App\Models\Country;
use Database\PDOConnectionFactory;

class CountryFactory implements ModelFactoryInterface
{
    public static function create(): Country
    {
        return new Country(PDOConnectionFactory::create());
    }
}
