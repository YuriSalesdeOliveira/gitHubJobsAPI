<?php

namespace Source\UseCase\ReadJobs;

use Source\Domain\Entities\Job;
use Source\Domain\RepositoriesInterfaces\GetJobRepositoryInterface;

class ReadJobs
{
    public function __construct(
        private GetJobRepositoryInterface $getJobRepository
    ) {
    }

    public function handle(InputBoundary $input): OutputBoundary
    {
        if ($filters = $input->getFilters()) {
            
            $jobs = $this->getJobRepository->where($filters);

        } else {

            $jobs = $this->getJobRepository->all();
        }


        $jobsAsArray = [];

        /** @var Job $job */
        foreach ($jobs as $job) {

            $jobsAsArray[] = $job->toArray();
        }

        return new OutputBoundary($jobsAsArray);
    }
}
