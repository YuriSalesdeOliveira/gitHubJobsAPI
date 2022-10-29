<?php

namespace Source\UseCase\ReadJobs;

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
