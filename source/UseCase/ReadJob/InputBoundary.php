<?php

namespace Source\UseCase\ReadJob;

class InputBoundary
{
    public function __construct(
        private array $filters
    ) {
    }

    public function getFilters(): array
    {
        return $this->filters;
    }
}
