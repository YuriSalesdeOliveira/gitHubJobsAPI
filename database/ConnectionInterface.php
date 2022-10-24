<?php

namespace Database;

use PDO;

interface ConnectionInterface
{
    public function connect(): PDO;
    public function getConnection(): PDO;
}
