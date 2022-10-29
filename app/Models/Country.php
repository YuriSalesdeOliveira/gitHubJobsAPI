<?php

namespace App\Models;

class Country extends Model
{
    protected static string $table = 'countries';
    protected static string $primaryKey = 'identity';
    protected static array $columns = [
        'name',
        'continent'
    ];
    protected static bool $timestamp = true;
}
