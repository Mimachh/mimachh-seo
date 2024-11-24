<?php 

namespace Mimachh\Seo\Schemas;

class GeoCoordinates extends StructuredValue
{
    public static function create(): self
    {
        return new self;
    }

    public function address(string $address) {
        $this->setAttribute('address', $address);

        return $this;
    }

    public function addressCountry(string $addressCountry) {
        $this->setAttribute('addressCountry', $addressCountry);

        return $this;
    }

    public function elevation(float $elevation) {
        $this->setAttribute('elevation', $elevation);

        return $this;
    }

    public function latitude(float $latitude) {
        $this->setAttribute('latitude', $latitude);

        return $this;
    }

    public function longitude(float $longitude) {
        $this->setAttribute('longitude', $longitude);

        return $this;
    }

    public function postalCode(string $postalCode) {
        $this->setAttribute('postalCode', $postalCode);

        return $this;
    }
}
