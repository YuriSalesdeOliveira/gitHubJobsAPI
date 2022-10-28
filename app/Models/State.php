<?php

namespace App\Models;

class State extends Model
{
    protected string $table = 'states';
    protected string $primaryKey = 'identity';
    protected array $columns = [
        'name',
        'country'
    ];
    protected bool $timestamp = true;
}
