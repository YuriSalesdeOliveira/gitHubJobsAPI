<?php

namespace Source\UseCase\FetchJobs;

use Source\UseCase\FetchJobs\InputBoundary;
use Source\UseCase\FetchJobs\OutputBoundary;

class ListJobs
{
    public function handle(InputBoundary $input): OutputBoundary
    {
        return new OutputBoundary();
    }
}
