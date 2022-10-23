<?php

namespace Source\Infra\Repositories\Memory;

use DateTimeImmutable;
use Source\Domain\Entities\Job;
use Source\Domain\ValueObjects\City;
use Source\Domain\ValueObjects\Image;
use Source\Domain\ValueObjects\Title;
use Source\Domain\ValueObjects\Author;
use Source\Domain\ValueObjects\Identity;
use Source\Domain\ValueObjects\TagCollection;
use Source\Domain\RepositoriesInterfaces\GetJobRepositoryInterface;
use Source\Domain\ValueObjects\Tag;

class GetJobRepository implements GetJobRepositoryInterface
{
    private array $jobs = [
        [
            'identity' => '330099',
            'image' => 'https://img.irroba.com.br/fit-in/600x600/filters:fill(fff):quality(95)/afabrica/catalog/loja/FA-453.jpg',
            'author' => 'Kasisto',
            'title' => 'Front-End Software Engineer',
            'tags' => 'Full time|Mide time',
            'city' => 'New York',
            'createdAt' => '1666484752',
            'updatedAt' => '1666484752',
        ],
        [
            'identity' => '335599',
            'image' => 'https://st3.depositphotos.com/2036925/19215/i/1600/depositphotos_192153730-stock-photo-fried-scallops-with-butter-sauce.jpg',
            'author' => 'Caroline',
            'title' => 'Front-End Devops',
            'tags' => 'Mide time|Extra time',
            'city' => 'Los Angeles',
            'createdAt' => '1666484752',
            'updatedAt' => '1666484752'
        ],
        [
            'identity' => '886699',
            'image' => 'https://st4.depositphotos.com/2036925/21768/i/1600/depositphotos_217688708-stock-photo-fresh-homemade-cottage-cheese-cheesecloth.jpg',
            'author' => 'Oliveira',
            'title' => 'Back-End Quality Softwares',
            'tags' => 'End time',
            'city' => 'Porto Seguro',
            'createdAt' => '1666484752',
            'updatedAt' => '1666484752'
        ]
    ];

    public function all(): array
    {
        $jobs = [];

        foreach ($this->jobs as $job) {

            $tags = [];

            foreach (explode('|', $job['tags']) as $tag) {
                $tags[] = Tag::parse($tag);
            }

            $jobs[] = new Job(
                Identity::parse($job['identity']),
                Image::parse($job['image']),
                Author::parse($job['author']),
                Title::parse($job['title']),
                TagCollection::parse($tags),
                City::parse($job['city']),
                (new DateTimeImmutable)->setTimestamp($job['createdAt']),
                (new DateTimeImmutable)->setTimestamp($job['updatedAt'])
            );
        }

        return $jobs;
    }

    public function where(array $filters): array
    {
        $jobs = [];

        foreach ($filters as $filter) {

            [$column, $operator, $value] = $filter;

            if ($returnedJobs = $this->getJobs($column, $operator, $value)) {

                array_push($jobs, ...$returnedJobs);
            }
        }

        return $jobs;
    }

    private function getJobs(string $column, string $operator, string $value): array|bool
    {
        $jobs = [];

        foreach ($this->jobs as $job) {

            $validateFilterResult = match ($operator) {
                '=' => $job[$column] == $value ? true : false,
                '!=' => $job[$column] != $value ? true : false,
                '<' => $job[$column] < $value ? true : false,
                '>' => $job[$column] > $value ? true : false,
                '<=' => $job[$column] <= $value ? true : false,
                '>=' => $job[$column] >= $value ? true : false
            };

            if ($validateFilterResult) {

                $tags = [];

                foreach (explode('|', $job['tags']) as $tag) {
                    $tags[] = Tag::parse($tag);
                }

                $jobs[] = new Job(
                    Identity::parse($job['identity']),
                    Image::parse($job['image']),
                    Author::parse($job['author']),
                    Title::parse($job['title']),
                    TagCollection::parse($tags),
                    City::parse($job['city']),
                    (new DateTimeImmutable)->setTimestamp($job['createdAt']),
                    (new DateTimeImmutable)->setTimestamp($job['updatedAt'])
                );
            }
        }

        return $jobs ?? false;
    }
}
