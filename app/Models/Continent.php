<?php

namespace App\Models;

class Continent extends Model
{
    protected string $table = 'continents';
    protected string $primaryKey = 'identity';
    protected array $columns = [
        'name'
    ];
    protected bool $timestamp = true;
}
