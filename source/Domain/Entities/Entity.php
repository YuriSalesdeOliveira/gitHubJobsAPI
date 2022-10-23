<?php

namespace Source\Domain\Entities;

abstract class Entity
{
    abstract public function toArray(): array;
}
