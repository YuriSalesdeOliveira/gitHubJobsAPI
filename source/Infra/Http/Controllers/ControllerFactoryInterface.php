<?php

namespace Source\Infra\Http\Controllers;

interface ControllerFactoryInterface
{
    public static function create(): ControllerInterface;
}
