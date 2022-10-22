<?php

namespace Source\Domain\ValueObjects;

use DomainException;

class Identity
{
    private string $identity;

    public function __construc(string $identity)
    {
        $this->identity = $identity;
    }

    public static function parse(string $identity): Identity
    {
        self::validate($identity);

        return new Identity($identity);
    }

    protected static function validate(string $identity): void
    {
        if (empty($identity)) {

            throw new DomainException('Identity cannot receive an empty value.');
        }
    }

    public function __toString(): string
    {
        return $this->identity;
    }
}
