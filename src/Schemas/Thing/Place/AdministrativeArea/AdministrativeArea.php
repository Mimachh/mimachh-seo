<?php 

namespace Mimachh\Seo\Schemas;

class AdministrativeArea extends Place
{
    public static function create(): self
    {
        return new self;
    }
}
