<?php

namespace App\Models\Factory;

use App\Models\Job;
use Database\PDOConnectionFactory;

class JobFactory implements ModelFactoryInterface
{
    public static function create(): Job
    {
        return new Job(PDOConnectionFactory::create());
    }
}
