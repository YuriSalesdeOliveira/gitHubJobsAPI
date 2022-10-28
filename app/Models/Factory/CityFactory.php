<?php

namespace App\Models\Factory;

use App\Models\City;
use Database\PDOConnectionFactory;

class CityFactory implements ModelFactoryInterface
{
    public static function create(): City
    {
        return new City(PDOConnectionFactory::create());
    }
}
