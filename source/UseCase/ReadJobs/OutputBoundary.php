<?php

namespace Source\UseCase\ReadJobs;

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
