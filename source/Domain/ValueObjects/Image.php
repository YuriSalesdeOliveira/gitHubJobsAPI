<?php

namespace Source\Domain\ValueObjects;

use DomainException;

class Image
{
    private string $image;

    public function __construct(string $image)
    {
        $this->image = $image;
    }

    public static function parse(string $image): Image
    {
        self::validate($image);

        return new Image($image);
    }

    protected static function validate(string $image): void
    {
        if (empty($image)) {

            throw new DomainException('Image cannot receive an empty value.');
        }
    }

    public function __toString(): string
    {
        return $this->image;
    }
}
