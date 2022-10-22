<?php

namespace Source\Domain\ValueObjects;

use DomainException;

class TagCollection
{
    private array $tagCollection;

    public function __construc(array $tagCollection)
    {
        $this->tagCollection = $tagCollection;
    }

    public static function parse(array $tagCollection): TagCollection
    {
        self::validate($tagCollection);

        return new TagCollection($tagCollection);
    }

    protected static function validate(array $tagCollection): void
    {
        if (empty($tagCollection)) {

            throw new DomainException('TagCollection cannot receive an empty value.');
        }

        self::isTagCollection($tagCollection);
    }

    protected static function isTagCollection(array $tagCollection): void
    {
        foreach ($tagCollection as $tag) {

            if (!($tag instanceof Tag)) {
                throw new DomainException('All TagCollection items must be a Tag instance.');
            }
        }
    }

    public function toArray(): array
    {
        return $this->tagCollection;
    }
}
