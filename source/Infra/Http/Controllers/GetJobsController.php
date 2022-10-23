<?php

namespace Source\Infra\Http\Controllers;

use Source\UseCase\ReadJob\ReadJob;
use Source\UseCase\ReadJob\InputBoundary;
use Source\UseCase\ReadJob\OutputBoundary;

class GetJobsController extends Controller implements ControllerInterface
{
    public function __construct(
        private ReadJob $useCase
    ) {
    }

    public function handle(array $data): void
    {
        $this->validateToken($data['token']);

        $filters = [];
        if (isset($data['column']) && isset($data['value'])) {

            $filters[] = [$data['column'], '=', $data['value']];
        }

        $input = new InputBoundary($filters);

        /** @var OutputBoundary $output */
        $output = $this->useCase->handle($input);

        echo json_encode($output->getJobs());
    }
}
