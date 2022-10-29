<?php

namespace Source\Infra\Http\Controllers;

use Source\UseCase\ReadJobs\ReadJobs;
use Source\UseCase\ReadJobs\InputBoundary;
use Source\UseCase\ReadJobs\OutputBoundary;

class GetJobsController extends Controller implements ControllerInterface
{
    public function __construct(
        private ReadJobs $useCase
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
