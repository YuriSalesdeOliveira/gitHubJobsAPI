<?php

namespace App\Models\Factory;

use App\Models\State;
use Database\PDOConnectionFactory;

class StateFactory implements ModelFactoryInterface
{
    public static function create(): State
    {
        return new State(PDOConnectionFactory::create());
    }
}
