<?php

namespace Source\UseCase\ReadJob;

class OutputBoundary
{
    public function __construct(
        private array $jobs
    ) {
    }

    public function getJobs(): array
    {
        return $this->jobs;
    }
}
