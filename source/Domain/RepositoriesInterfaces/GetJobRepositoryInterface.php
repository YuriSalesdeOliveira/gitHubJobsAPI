<?php

namespace Source\Domain\RepositoriesInterfaces;

interface GetJobRepositoryInterface
{
    public function all(): array;
    public function where(array $filters): array;
}