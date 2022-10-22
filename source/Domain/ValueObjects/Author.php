<?php

namespace Source\Domain\ValueObjects;

use DomainException;

class Author
{
    private string $author;

    public function __construc(string $author)
    {
        $this->author = $author;
    }

    public static function parse(string $author): Author
    {
        self::validate($author);

        return new Author($author);
    }

    protected static function validate(string $author): void
    {
        if (empty($author)) {

            throw new DomainException('Author cannot receive an empty value.');
        }
    }

    public function __toString(): string
    {
        return $this->author;
    }
}
