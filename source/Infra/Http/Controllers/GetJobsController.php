<?php

namespace Source\Infra\Http\Controllers;

use Source\UseCase\ReadJob\ReadJob;
use Source\UseCase\ReadJob\InputBoundary;
use Source\UseCase\ReadJob\OutputBoundary;

class GetJobsController implements ControllerInterface
{
    public function __construct(
        private ReadJob $useCase
    ) {
    }

    public function handle(array $data): void
    {
        $input = new InputBoundary([]);

        /** @var OutputBoundary $output */
        $output = $this->useCase->handle($input);

        echo json_encode($output->getJobs());
    }
}
