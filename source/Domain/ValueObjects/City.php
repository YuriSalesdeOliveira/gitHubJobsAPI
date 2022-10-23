<?php

namespace Source\Domain\ValueObjects;

use DomainException;

class City
{
    private string $city;

    public function __construct(string $city)
    {
        $this->city = $city;
    }

    public static function parse(string $city): City
    {
        self::validate($city);

        return new City($city);
    }

    protected static function validate(string $city): void
    {
        if (empty($city)) {

            throw new DomainException('City cannot receive an empty value.');
        }
    }

    public function __toString(): string
    {
        return $this->city;
    }
}
