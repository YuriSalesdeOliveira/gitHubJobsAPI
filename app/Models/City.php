<?php

namespace App\Models;

class City extends Model
{
    protected string $table = 'cities';
    protected string $primaryKey = 'identity';
    protected array $columns = [
        'name',
        'state'
    ];
    protected bool $timestamp = true;
}
