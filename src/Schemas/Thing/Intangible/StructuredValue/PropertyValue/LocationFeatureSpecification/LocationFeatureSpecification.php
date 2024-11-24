<?php 

namespace Mimachh\Seo\Schemas;

class LocationFeatureSpecification extends PropertyValue
{
    public static function create(): self
    {
        return new self;
    }

    public function hoursAvailable(OpeningHoursSpecification $hoursAvailable)
    {
        $this->setAttribute('hoursAvailable', $hoursAvailable);

        return $this;
    }

    public function validFrom(string $validFrom)
    {
        $this->setAttribute('validFrom', $validFrom);

        return $this;
    }

    public function validThrough(string $validThrough)
    {
        $this->setAttribute('validThrough', $validThrough);

        return $this;
    }
}
