<?php

use App\Models\Model;
use Database\PDOConnectionFactory;

Model::configurations([
    'connection' => PDOConnectionFactory::create()->connect()
]);