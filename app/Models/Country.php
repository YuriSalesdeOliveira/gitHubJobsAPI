<?php

namespace App\Models;

class Country extends Model
{
    protected string $table = 'countries';
    protected string $primaryKey = 'identity';
    protected array $columns = [
        'name',
        'continent'
    ];
    protected bool $timestamp = true;
}
