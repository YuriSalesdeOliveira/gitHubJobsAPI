<?php

namespace App\Models;

use PDO;
use PDOStatement;

abstract class Model
{
    protected static string $table;
    protected static string $primaryKey = 'id';
    protected static array $columns;
    protected static bool $timestamp = true;

    protected static array $configurations = [];

    protected PDO $connection;
    protected PDOStatement $statement;

    public function __construct()
    {
        $this->connection = static::$configurations['connection'];
    }

    public static function configurations(array $configurations): void
    {
        static::$configurations = $configurations;
    }

    //Read methods
    
    public function fetch(): array
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function all(): static
    {
        return static::select();
    }

    public static function find(array $filters = [], string $columns = '*'): static
    {
        return static::select($filters, $columns);
    }

    protected static function select(array $filters = [], string $columns = '*'): static
    {
        $sql = "SELECT {$columns} FROM " . static::$table;

        $sql .= static::where($filters);

        $params = [];
        foreach ($filters as $filter) {
            
            [$column, $operator, $value] = $filter;

            $params[":{$column}"] = $value;
        }

        $static = new static();
        $static->statement = $static->connection->prepare($sql);
        $static->statement->execute($params);

        return $static;
    }

    protected static function where(array $filters): string
    {
        $sql = ' WHERE 1 = 1';

        foreach ($filters as $filter) {

            [$column, $operator] = $filter;

            $sql .= " AND {$column} {$operator} :{$column}";
        }

        return $sql;
    }

    //Update methods
}
