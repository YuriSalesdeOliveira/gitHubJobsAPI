<?php

namespace App\Models;

class State extends Model
{
    protected static string $table = 'states';
    protected static string $primaryKey = 'identity';
    protected static array $columns = [
        'name',
        'country'
    ];
    protected static bool $timestamp = true;
}
