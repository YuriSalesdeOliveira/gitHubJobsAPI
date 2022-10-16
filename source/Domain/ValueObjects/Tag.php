<?php

namespace Source\Domain\ValueObjects;

use DomainException;

class Tag
{
    private string $tag;

    public function __construc(string $tag)
    {
        $this->tag = $tag;
    }

    public static function parse(string $tag): Tag
    {
        self::validate($tag);

        return new Tag($tag);
    }

    public static function validate(string $tag): void
    {
        if (empty($tag)) {

            throw new DomainException('Tag cannot receive an empty value.');
        }
    }

    public function __toString(): string
    {
        return $this->tag;
    }
}
