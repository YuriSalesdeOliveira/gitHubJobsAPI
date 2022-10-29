<?php

namespace App\Models;

class Continent extends Model
{
    protected static string $table = 'continents';
    protected static string $primaryKey = 'identity';
    protected static array $columns = [
        'name'
    ];
    protected static bool $timestamp = true;
}
