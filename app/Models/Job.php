<?php

namespace App\Models;

class Job extends Model
{
    protected static string $table = 'jobs';
    protected static string $primaryKey = 'identity';
    protected static array $columns = [
        'image',
        'author',
        'title',
        'tagCollection',
        'city',
    ];
    protected static bool $timestamp = true;
}
