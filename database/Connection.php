<?php

namespace Database;

use PDO;

class Connection implements ConnectionInterface
{
    private PDO $instance;

    public function __construct(
        private string $dsn,
        private string $username,
        private string $password,
        private array $options
    ) {
    }

    public function connect(): PDO
    {
        if (!isset($this->instance)) {

            $this->instance = new PDO($this->dsn, $this->username, $this->password, $this->options);
        }

        return $this->instance;
    }

    public function getConnection(): PDO
    {
        return $this->instance ?? $this->connect();
    }
}
