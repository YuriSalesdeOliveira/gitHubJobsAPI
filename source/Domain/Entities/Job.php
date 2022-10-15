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

    public function toArray(): array
    {
        $job = [
            'identity' => $this->getIdentity(),
            'image' => $this->getImage(),
            'author' => $this->getAuthor(),
            'title' => $this->getTitle(),
            'tags' => $this->getTags(),
            'city' => $this->getCity(),
            'createdAt' => $this->getCreatedAt(),
            'updatedAt' => $this->getUpdatedAt()
        ];

        return $job;
    }

    public function getIdentity(): Identity
    {
        return new Identity();
    }
    public function getImage(): Image
    {
        return new Image();
    }
    public function getAuthor(): Author
    {
        return new Author();
    }
    public function getTitle(): Title
    {
        return new Title();
    }
    public function getTags(): Tag
    {
        return new Tag();
    }
    public function getCity(): City
    {
        return new City();
    }
    public function getCreatedAt(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
    public function getUpdatedAt(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}
