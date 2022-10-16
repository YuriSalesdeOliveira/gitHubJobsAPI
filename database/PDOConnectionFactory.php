<?php

namespace Database;

class PDOConnectionFactory implements ConnectionFactoryInterface
{
    public static function create(): ConnectionInterface
    {
        $dsn = sprintf(
            '%s:host=%s;port=%s;dbname=%s;charset=%s',
            app('database.driver', default: 'mysql'),
            app('database.host', default: '127.0.0.1'),
            app('database.port', default: '3306'),
            app('database.dbname', default: 'development_db'),
            app('database.charset', default: 'uft8')
        );

        return new PDOConnection(
            $dsn,
            app('database.username', default: 'root'),
            app('database.password', default: 'root'),
            app('database.options', default: [])
        );
    }
}
