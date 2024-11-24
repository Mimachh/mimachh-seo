<?php 

namespace Mimachh\Seo\Schemas;

class Audience extends Intangible
{
    public static function create(): self
    {
        return new self;
    }

    public function audienceType(string $audienceType)
    {
        $this->setAttribute('audienceType', $audienceType);

        return $this;
    }

    public function geographicArea(AdministrativeArea $geographicArea)
    {
        $this->setAttribute('geographicArea', $geographicArea);

        return $this;
    }

}
