<?php

namespace App\Models;

interface ModelFactoryInterface
{
    public static function create(): Model;
}
