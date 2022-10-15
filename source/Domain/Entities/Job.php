<?php

namespace Source\Domain\Entities;

use Entity;
use DateTimeImmutable;
use Source\Domain\ValueObjects\Tag;
use Source\Domain\ValueObjects\City;
use Source\Domain\ValueObjects\Image;
use Source\Domain\ValueObjects\Title;
use Source\Domain\ValueObjects\Author;
use Source\Domain\ValueObjects\Identity;

class Job extends Entity
{
    public function __construct(
        private Identity $identity,
        private Image $image,
        private Author $author,
        private Title $title,
        private Tag $tags,
        private City $city,
        private DateTimeImmutable $createdAt,
        private DateTimeImmutable $updatedAt
    ) {
        
    }
}
