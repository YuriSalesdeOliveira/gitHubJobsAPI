<?php

namespace Source\Infra\Http\Controllers;

interface ControllerInterface
{
    public function handle(array $data): void;
}
