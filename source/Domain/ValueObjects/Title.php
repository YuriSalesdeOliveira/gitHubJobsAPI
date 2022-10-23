<?php

namespace Source\Domain\ValueObjects;

use DomainException;

class Title
{
    private string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public static function parse(string $title): Title
    {
        self::validate($title);

        return new Title($title);
    }

    protected static function validate(string $title): void
    {
        if (empty($title)) {

            throw new DomainException('Title cannot receive an empty value.');
        }
    }

    public function __toString(): string
    {
        return $this->title;
    }
}
