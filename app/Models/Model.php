<?php

namespace App\Models;

use Database\ConnectionInterface;
use PDO;
use PDOStatement;

abstract class Model
{
    protected string $table;
    protected string $primaryKey = 'id';
    protected array $columns;
    protected bool $timestamp = true;

    protected PDO $connection;
    protected PDOStatement $statement;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection->connect();
    }

    public function fetch(): array
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function all(): static
    {
        return $this->select();
    }

    public function find(array $filters = [], string $columns = '*'): static
    {
        return $this->select($filters, $columns);
    }

    protected function select(array $filters = [], string $columns = '*'): static
    {
        $sql = "SELECT * FROM {$this->table}";

        $sql .= $this->where($filters);

        $columnValue = $this->getColumnValue($filters);

        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($columnValue);

        return $this;
    }

    protected function where(array $filters): string
    {
        $sql = ' WHERE 1 = 1';

        foreach ($filters as $filter) {

            [$column, $operator] = $filter;

            $sql .= " AND {$column} {$operator} :{$column}";
        }

        return $sql;
    }

    protected function getColumnValue(array $filters): array
    {
        $columnValue = [];

        foreach ($filters as $filter) {

            [$column,, $value] = $filter;

            $columnValue[":{$column}"] = $value;
        }

        return $columnValue;
    }
}
