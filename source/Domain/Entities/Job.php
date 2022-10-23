<?php

namespace Source\Domain\Entities;

use DateTimeImmutable;
use Source\Domain\ValueObjects\City;
use Source\Domain\ValueObjects\Image;
use Source\Domain\ValueObjects\Title;
use Source\Domain\ValueObjects\Author;
use Source\Domain\ValueObjects\Identity;
use Source\Domain\ValueObjects\TagCollection;

class Job extends Entity
{
    public function __construct(
        private Identity $identity,
        private Image $image,
        private Author $author,
        private Title $title,
        private TagCollection $tagCollection,
        private City $city,
        private DateTimeImmutable $createdAt,
        private DateTimeImmutable $updatedAt
    ) {
    }

    public function toArray(): array
    {
        $job = [
            'identity' => (string) $this->getIdentity(),
            'image' => (string) $this->getImage(),
            'author' => (string) $this->getAuthor(),
            'title' => (string) $this->getTitle(),
            'tagCollection' => $this->getTagCollection()->toArray(),
            'city' => (string) $this->getCity(),
            'createdAt' => $this->getCreatedAt()->getTimestamp(),
            'updatedAt' => $this->getUpdatedAt()->getTimestamp()
        ];

        return $job;
    }

    public function getIdentity(): Identity
    {
        return $this->identity;
    }
    public function getImage(): Image
    {
        return $this->image;
    }
    public function getAuthor(): Author
    {
        return $this->author;
    }
    public function getTitle(): Title
    {
        return $this->title;
    }
    public function getTagCollection(): TagCollection
    {
        return $this->tagCollection;
    }
    public function getCity(): City
    {
        return $this->city;
    }
    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
    public function getUpdatedAt(): DateTimeImmutable
    {
        return $this->updatedAt;
    }
}
