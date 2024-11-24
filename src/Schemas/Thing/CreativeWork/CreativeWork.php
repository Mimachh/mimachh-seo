<?php 

namespace Mimachh\Seo\Schemas;

class CreativeWork extends Thing
{
    public static function create(): self
    {
        return new self;
    }
}