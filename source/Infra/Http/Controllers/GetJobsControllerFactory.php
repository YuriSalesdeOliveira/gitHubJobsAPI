<?php

namespace Source\Infra\Http\Controllers;

use Source\UseCase\ReadJobs\ReadJobs;
use Source\Infra\Repositories\Memory\GetJobRepository;

class GetJobsControllerFactory implements ControllerFactoryInterface
{
    public static function create(): ControllerInterface
    {
        $getJobRepository = new GetJobRepository();

        return new GetJobsController(
            new ReadJobs($getJobRepository)
        );
    }
}
