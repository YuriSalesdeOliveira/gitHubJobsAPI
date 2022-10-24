<?php

namespace App\Models;

class Job extends Model
{
    protected string $table = 'jobs';
    protected string $primaryKey = 'identity';
    protected array $columns = [
        'image',
        'author',
        'title',
        'tagCollection',
        'city',
    ];
    protected bool $timestamp = true;
}
