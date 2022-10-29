<?php

namespace App\Models;

class City extends Model
{
    protected static string $table = 'cities';
    protected static string $primaryKey = 'identity';
    protected static array $columns = [
        'name',
        'state'
    ];
    protected static bool $timestamp = true;
}
