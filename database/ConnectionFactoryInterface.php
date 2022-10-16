<?php

namespace Database;

interface ConnectionFactoryInterface
{
    public static function create(): ConnectionInterface;
}
