<?php

namespace Database;

interface ConnectionInterface
{
    public function connect();
    public function getConnection();
}
