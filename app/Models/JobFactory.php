<?php

namespace App\Models;

use Database\PDOConnectionFactory;

class JobFactory implements ModelFactoryInterface
{
    public static function create(): Job
    {
        return new Job(PDOConnectionFactory::create());
    }
}