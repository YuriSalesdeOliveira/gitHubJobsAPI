<?php

function path(string $key, string $default = ''): string
{
    $path = require(__DIR__ . '/paths.php');

    return isset($path[$key]) ? $path[$key] : $default;
}

function app(string $key, string $default = ''): string
{
    $keyAsArray = explode('.', $key);

    $app = require(__DIR__ . '/app.php');

    foreach ($keyAsArray as $key) {

        if (is_array($app)) {

            $app = $app[$key];
        }
    }

    return $app ?? $default;
}
