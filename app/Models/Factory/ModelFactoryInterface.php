<?php

namespace App\Models\Factory;

use App\Models\Model;

interface ModelFactoryInterface
{
    public static function create(): Model;
}
